<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class PagesController extends Controller
{
    public function home(){

        $users = User::all();

        // return $users;
        
        return view('welcome', compact('users'));

    }

    public function contact(){
        
        return view('contact');

    }

    public function about(){

        return view('about');

    }

    public function tasks(){

        $tasks = [
            'Go to the store',
            'Go to Shopping',
            'Go to the concert',
            'Go to sleep',
            'Go to work',
        ];

        return view('tasks', ['tasks' => $tasks]);

    }
}
