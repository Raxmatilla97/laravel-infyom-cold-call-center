<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\QongiroqQilganlar;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $umumiySon = QongiroqQilganlar::get()->count();
        $keganClient = QongiroqQilganlar::where('keldimi', 1)->get()->count();
        $kelmaganClient = QongiroqQilganlar::where('keldimi', 0)->get()->count();
        
        return view('home')
        ->with('umumiySon', $umumiySon)
        ->with('keganClient', $keganClient)
        ->with('kelmaganClient', $kelmaganClient);
    }
}
