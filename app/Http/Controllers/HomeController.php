<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    public function mailRegister(Request $request)
    {
        $id = (int) $request->id;
        $register = Admin::where(
            [
                'id' => $id,
                'token_register' => $request->token
            ]
        )->get()->first();
        if (!is_null($register))
        {
            return view('mail.mail-new-password',['id' => $id, 'token' => $request->token]);
        }
        else
            throw abort(404);
    }

    public function confirmRegister(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:10'
        ]);
        $admin = Admin::where(
            [
                'id' => $request->id,
                'token_register' => $request->token
            ]
        )->get()->first();
        if (!is_null($admin))
        {
            $admin->password = Hash::make($request->password);
            $admin->token_register = NULL;
            $admin->save();
            return view('mail.success-register');
        }
        else
            throw abort(404);
    }
}
