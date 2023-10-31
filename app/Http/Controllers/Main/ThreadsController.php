<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Threads;
use Illuminate\Foundation\Auth\User;

class ThreadsController extends Controller
{
    //

    public function __construct()
    {

        $this->middleware('auth');
    
    }

    public function index()
    {

        return view('main.mainthreads');

    }


    public function create(User $user)
    {
        
        if(auth()->user()->username == $user->username) return view('main.create');
        else return redirect()->route('threads.index',auth()->user()->username);
        
    }

    public function store(Request $request,Threads $thread)
    {

        $this->validate($request,[

            'titulo_thread'=>['required','min:1','max:30'],
            'thread' => ['required','min:1','max:250'],

        ]);

        Threads::create([

            'user_id' => auth()->user()->id,
            'titulo' => $request->titulo_thread,
            'comentario' => $request->thread

        ]);

        return redirect()->route('threads.index',auth()->user()->username);

        // dd($request);

    }

}
