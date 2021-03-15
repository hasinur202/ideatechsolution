<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function index()
    {
        return view('layouts.backend.auth.login');
    }

    public function register()
    {
        return view('layouts.backend.auth.register');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
            'type'=>'super_admin'
        ])) {
            return response()->json([
                'msg'=>"success"
            ],200);
        }
        else{

            return response()->json([
                'msg'=>"success"
            ],500);
        };


    }

    public function logout(Request $request)
    {
        if(Auth::check()){
            Auth::logout();
            $request->session()->flush();

            return redirect()->route('home');
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users'

        ]);


        if ($validator->fails()) {
            return response()->json([
                'errors'=>"match"
            ],500);
        }else{
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            return response()->json([
                'msg'=>'succes'
            ],200);
        }
    }
}
