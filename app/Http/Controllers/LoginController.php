<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $loginInfo = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        echo 'iya';

        echo($request->email);

        if (Auth::attempt($loginInfo)) {
            $request->session()->regenerate();
            echo 'berhasil';
            //return redirect()->intended('dashboard');
        } else {
            /* return back()->withErrors([
                'email' => 'abc'
            ]); */
            echo 'error';
        }
    }
}
