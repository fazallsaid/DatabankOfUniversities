<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UniversitiesController extends Controller
{
    public function index(){
        return view('account.universities.index', [
            'title' => 'Universities / Databank of Universities',
            'title2' => 'Universities'
        ]);
    }
}
