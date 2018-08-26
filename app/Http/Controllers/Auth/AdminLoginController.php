<?php
namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

class AdminLoginController extends Controller
{
    use SendsPasswordResetEmails, ResetsPasswords;

    public function __contruct()
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }
    public function showLoginForm()
    {
        return view('auth.login', ['active' => '']);
    }
    public function login(Request $request)
    {
        // Validate request
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        // Attempt to log the user in
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Success redirect to dashboard
            return redirect()->intended(route('admin'));
        }
        return redirect()->back()->withInput($request->only('email'));
        // Unsuccess redirect back
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

    public function showLinkRequestForm()
    {
        return view('auth.passwords.admin-email', ['active' => '']);
    }

    public function broker()
    {
        return Password::broker('admins');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.passwords.admin-reset', ['active' => 'home', 'token' => $token, 'email' => $request->email]);
    }
}