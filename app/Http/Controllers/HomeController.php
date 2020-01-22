<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Homecontroller extends Controller {

    public function index() {
        $products = [
            'Broodrooster',
            'Autoradio',
            'Laptop'
        ];

    return view('home', ['producten' => $products]);

        }

    public function showHome() 
    {
        return view('home');
    }

    public function showAboutUs() 
    {
        return view('aboutus');
    }

    public function showForm() 
    {
        return view('form');
    }
}