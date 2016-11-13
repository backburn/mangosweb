<?php

namespace App\Http\Controllers;

use App\User;
use App\Account;
use App\Character;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $account_ids = Account::where('email', \Auth::user()->email)->pluck('id');
        $characters = Character::whereIn('id', $account_ids);

        if ($request->ajax()) {
            return response()->json($characters->get());
        } else {
            return view('characters.index', ['characters' => $characters->paginate(10)]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('characters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|min:3|max:32|alphanum|unique:char.characters',
            'password' => 'required|min:6|max:32|alphanum|confirmed',
        ]);

        User::create([
            'username' => $request['username'],
            'sha_pass_hash' => sha1(strtoupper($request['username'].':'.$request['password'])),
            'email' => \Auth::user()->email,
            'gmlevel' => 0,
            'expansion' => 1,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $character = Character::whereId($id)->get()->first();
        if (!$character) { abort(403, 'Unauthorized action.'); }
        return view('characters.show', ['character' => $character]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $character = Character::whereId($id)->get()->first();
        if (!$character) { abort(403, 'Unauthorized action.'); }
        return view('characters.edit', ['character' => $character]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $character = Character::whereId($id)->get()->first();
        if ($request->ajax()) {
            if (!$character) { abort(403, 'Unauthorized action.'); }
            if ($request['name'] == 'email') {
                $this->validate($request, [
                    'value' => 'email',
                ]);
                $character->email = $request['value'];
                $character->save();
            }
        } else {
            if (!$character) { abort(403, 'Unauthorized action.'); }
            $this->validate($request, [
                'username' => 'min:3|max:32|alphanum|unique:char.character',
                'password' => 'min:6|max:32|alphanum',
            ]);
            $update = [];
            if ($request['password'] ?? false) {
                $update['sha_pass_hash'] = sha1(strtoupper($character->username . ':' . $request['password']));
            }
            if ($request['username'] ?? false) {
                $update['username'] = $request['username'];
            }
            $character->update($update);
            $character->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
