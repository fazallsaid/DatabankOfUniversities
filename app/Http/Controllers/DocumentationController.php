<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    public function index(){
        $title = "Documentation / All Unversities of Indonesia";
        $data = [
            'title' => $title,
        ];
        return view('documentation.index', $data);
    }
}
