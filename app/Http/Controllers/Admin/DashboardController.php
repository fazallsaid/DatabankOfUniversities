<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $session = session('users');

        if($session != true){
            return redirect('account/signin');
        }

        $title = "Dashboard / Databank of Universities";
        $title2 = "Dashboard";
        $data = [
            'title' => $title,
            'title2' => $title2
        ];

        return view('account.dashboard', $data);
    }
}
