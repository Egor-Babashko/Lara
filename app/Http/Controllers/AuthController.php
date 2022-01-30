<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function showAuth(){
        return view('pages.both.auth');
    }

    public function checkUser(Request $post) {
        $user = User::where('email', $post['email'])->first();


        if($user) {
            if(Hash::check($post['password'], $user->password)) {
                Auth::login($user);
                return redirect()->route('create');
            }
        }
    }
}
