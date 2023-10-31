<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    //

    public function index()
    {

        return view('auth.register');

    }


    public function store(Request $request)
    {

        //dd(Str::slug($request->username));

        $this->validate($request,[

            'name' => ['required','min:2','max:30'],
            'apellido' => ['required','min:2','max:30'],
            'username' => ['required','min:4','max:15','unique:users'],
            'email' => ['required','min:4','max:20','unique:users','email'],
            'password' => ['required','min:5','max:20','confirmed']

        ]);

        User::create([

            'name' => $request->name,
            'apellido' => $request->apellido,
            'username' => Str::slug($request->username),
            'email' => $request->email,
            'password' => $request->password

        ]);

        auth()->attempt($request->only(['username','password']));

        return redirect()->route('threads.index',auth()->user()->username);

    }

}
