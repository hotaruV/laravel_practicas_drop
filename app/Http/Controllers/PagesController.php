<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function semestral(){
        return view('pages.semestral');
    }
    public function anual(){
        return view('pages.anual');
    }
    public function semi(){
        return view('pages.semi');
    }
}
