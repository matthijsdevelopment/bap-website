<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Homecontroller extends Controller {
    public function showHome() 
    {
        return view('home');
    }

    public function showAboutUs() 
    {
        return view('aboutus');
    }
}