<?php

namespace App\Http\Controllers;

use App\Realm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class RealmsController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $realms = Realm::paginate(1);

        return view('realms', [
            'name' => 'Phelps',
            'realms' => $realms,
        ]);
    }
}
