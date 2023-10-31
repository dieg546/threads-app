<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function index()
    {

        if(auth()->user()){

            return redirect()->route('threads.index',auth()->user()->username);

        }

        return view('auth.login');

    }

    public function store(Request $request)
    {

        

        $this->validate($request,[

            'username' => ['required'],
            'password' => ['required']

        ]);

        // dd($request->remember);

        if(auth()->attempt(['username'=>$request->username,'password'=>$request->password],$request->remember)){

            return redirect()->route('threads.index');

        }else{

            return back()->with('mensaje','Credenciales incorrectas');

        }



    }

}
