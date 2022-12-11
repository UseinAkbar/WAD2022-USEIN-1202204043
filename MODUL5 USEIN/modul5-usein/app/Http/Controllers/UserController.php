<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */

    public function auth(Request $req)
    {
        $login = Auth::attempt([
            'email' => $req->email,
            'password' => $req->password,
        ]);
        if ($login) {
            $req->session()->regenerate();
            return redirect()->intended('/');
        };
        return redirect('/login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
}
