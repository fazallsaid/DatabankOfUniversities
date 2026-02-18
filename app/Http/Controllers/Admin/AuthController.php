<?php

namespace App\Http\Controllers\Admin;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function indexLogin(){
        $session = session('users');
        if($session == true){
            return redirect('account/dashboard');
        }
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

        $userCheck = Users::where('username', $validatedData['usermail'])->orWhere('email', $validatedData['usermail'])->first();

        if($userCheck && Hash::check($validatedData['password'], $userCheck->password)){
            $request->session()->put('userid', $userCheck->user_id);
            $request->session()->put('users', true);

            if($userCheck->role == "administrator"){
                $request->session()->put('userRole', $userCheck->role);
            }else if($userCheck->role == "contributor"){
                $request->session()->put('userRole', $userCheck->role);
            }else{
                $request->session()->put('userRole', $userCheck->role);
            }
            toastr()->success("You've successfully logged in!","WELCOME!");
            return redirect('account/dashboard');
        }else{
            return redirect('account/signin');
        }
    }

    public function indexReg(){
        $title = "Create Account / Databank of Universities";

        $data = [
            'title' => $title
        ];
        return view('auth.register', $data);
    }

    function logout(){
        session()->forget(['users', 'userid', 'userRole']);
        toastr()->success("You've successfully logout. Thank you for contributing!", "BYE!");
        return redirect('account/signin');
    }
}
