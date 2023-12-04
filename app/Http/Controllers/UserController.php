<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function signin()
    {
        return view("auth.signin");
    }
    public function signin_user(Request $request)
    {
    }
    public function signup(Request $request)
    {
        return view("auth.signup");
    }
    public function signin_valid(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "pass" => "required",
        ]);
        $user = $request->only("email","pass");
        if(Auth::attempt([
        "email" => $user["email"],
        "password"=>$user["pass"]
        ])) {
            return redirect("/")->with("success", "");
        };
        return redirect()->back()->with("error", "неверный логин или пароль");
    }
    public function signup_valid(Request $request)
    {
        $request->validate([
            "user_name" => "required",
            "email" => "required|unique:users|email",
            "pass" => "required",
            "confirm_pass" => "required|same:pass",
        ]);
        $userInfo = $request->all();
            $userCreate= User::create([
            "name" => $userInfo["user_name"],
            "email" => $userInfo["email"],
            "password" =>Hash::make($userInfo["pass"]),

        ]);
        if($userCreate)
        return redirect("/")->with("success", "");
        return redirect()->back()->with( "error","Произошла ошибка! Повторите попытку ");


    }
    public function signout(Request $request){
    Session::flush();
    Auth::logout();
    return redirect("/");
    }
}
