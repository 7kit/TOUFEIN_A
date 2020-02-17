<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $envoies = App\Transaction::where('id_env',Auth::id())->get();
        $recues = App\Transaction::where('id_rec',Auth::id())->get();
        return view('home',['envoies' => $envoies, 'recues' => $recues]);
    }
}
