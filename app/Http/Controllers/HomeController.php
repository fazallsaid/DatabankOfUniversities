<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title = "Home / All Unversities of Indonesia";
        $data = [
            'title' => $title,
        ];
        return view('home', $data);
    }
}
