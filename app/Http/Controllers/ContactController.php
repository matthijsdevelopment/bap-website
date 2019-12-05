<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showPage(){
        return view ('contact pagina!');
    }
}
