<?php

namespace App\Http\Controllers;

use App\Models\Reg;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegController extends Controller
{
    public function showReg()
    {
        return view('pages.both.reg');
    }

    public function addUser(Request $request)
    {
        $data = $request->post();

        $validator = validator($data, [
            'name' => "required|max:15",
            'email' => "required|unique:users",
            'password' => "required",
        ]);

        if ($validator->fails()) {
            return redirect()->route("reg")->withErrors($validator->errors());
        }

        $post = $request->post();

        $user = new User($post);

        $user->password=Hash::make($post['password']);
        $user->save();
        Auth::login($user);

        return redirect()->route('index');
    }

    public function getUser(Request $request)
    {
        return $request->post();
    }
}
