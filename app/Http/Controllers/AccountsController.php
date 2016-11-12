<?php

namespace App\Http\Controllers;

use App\User;
use App\Account;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
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
        $accounts = Account::where('email', \Auth::user()->email);
        if ($request->ajax()) {
            return response()->json($accounts->get());
        } else {
            return view('accounts.index', ['accounts' => $accounts->paginate(10)]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.create');
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
            'username' => 'required|min:3|max:32|alphanum|unique:account',
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
        $account = Account::whereEmail(\Auth::user()->email)->whereId($id)->get()->first();
        if (!$account) { abort(403, 'Unauthorized action.'); }
        return view('accounts.show', ['account' => $account]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $account = Account::whereEmail(\Auth::user()->email)->whereId($id)->get()->first();
        if (!$account) { abort(403, 'Unauthorized action.'); }
        return view('accounts.edit', ['account' => $account]);
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

        $this->validate($request, [
            'username' => 'min:3|max:32|alphanum|unique:account',
            'password' => 'min:6|max:32|alphanum',
        ]);

        $account = Account::whereEmail(\Auth::user()->email)->whereId($id)->get()->first();
        if (!$account) { abort(403, 'Unauthorized action.'); }
        $update = [];
        if ($request['password'] ?? false) {
            $update['sha_pass_hash'] = sha1(strtoupper($account->username . ':' . $request['password']));
        }
        if ($request['username'] ?? false) {
            $update['username'] = $request['username'];
        }
        $account->update($update);
        $account->save();
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
