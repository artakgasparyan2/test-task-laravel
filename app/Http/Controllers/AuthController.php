<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReCaptchaRequest;
use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Validator;
class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string|confirmed|min:6',
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'birthday' => 'required',
            'recaptcha_token' => 'required',
        ]);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->birthday = $request->birthday;

        $path = $request->file('image')->store('user_images');
        $user->image = $path;
        $user->password = Hash::make($request->password);

        if($user->save()){
            return redirect('/');
        }
    }

    public function login(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|string',
            'recaptcha_token' => 'required',
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('home');
        }
        return redirect('/')->with('error', 'Oops! You have entered invalid credentials');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
}
