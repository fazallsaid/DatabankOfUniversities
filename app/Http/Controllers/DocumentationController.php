<?php

namespace App\Http\Controllers;

use App\Models\University;
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
    public function usage(){
        $title = "Documentation / All Unversities of Indonesia";
        $data = [
            'title' => $title,
        ];
        return view('documentation.pages.usage', $data);
    }

    public function data(){
        $title = "Documentation / All Unversities of Indonesia";
        $universities = University::all();
        $data = [
            'title' => $title,
            'universities' => $universities
        ];
        return view('documentation.pages.data', $data);
    }
}
