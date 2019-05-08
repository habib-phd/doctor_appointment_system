<?php

namespace App\Http\Controllers;
use App\Speciality;
use Illuminate\Http\Request;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

   
    public function index() {
        $Speciality = Speciality::all();
        //dd($Speciality);
        return view('welcome', compact('Speciality'));
       // return view('home');
    }

}
