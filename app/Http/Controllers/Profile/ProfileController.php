<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Main\ThreadsController;
use App\Models\Threads;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index(User $user)
    {

        $thread = Threads::where('user_id',$user->id)->get();

        // dd($thread);

        return view('main.user',[

            'threads' => $thread,
            'user'=>$user,
        ]);

    }
}
