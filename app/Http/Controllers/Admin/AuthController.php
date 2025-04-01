<?php

namespace App\Http\Controllers\Admin;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function indexLogin(){
        $title = "Login / Databank of Universities";

        $data = [
            'title' => $title
        ];
        return view('auth.login', $data);
    }

    function login(Request $request){
        $validatedData = $request->validate([
            'usermail' => 'required',
            'password' => 'required'
        ]);

        $userCheck = Users::where('username', $validatedData['usermail'])->where('email', $validatedData['usermail'])->first();

        if($userCheck && Hash::check($validatedData['password'], $userCheck->password)){
            $request->session()->put('userid', $userCheck->user_id);

            if($userCheck->role == "administrator"){
                $request->session()->put('userAdmin', true);
                $request->session()->put('userRole', $userCheck->role);
            }else if($userCheck->role == "contributor"){
                $request->session()->put('userContributor', true);
                $request->session()->put('userRole', $userCheck->role);
            }else{
                $request->session()->put('userCoders', true);
                $request->session()->put('userRole', $userCheck->role);
            }

            return redirect('dashboard');
        }
    }

    public function indexReg(){
        $title = "Create Account / Databank of Universities";

        $data = [
            'title' => $title
        ];
        return view('auth.register', $data);
    }
}
