<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

use App\Mail\TokenSender;

use App\Models\User;

class UserController extends Controller
{
    public function viewRegister () {
        return view('register');
    }

    public function viewLogin () {
        return view('loginPage');
    }

    public function redirectHome () {
        return redirect() -> route('dashboard');
    }

    public function viewForgetPassword () {
        return view('forgetPassword');
    }

    public function viewDashboard () {
        return view('cmsDashboard');
    }

    public function authenticate (Request $request)
    {
        try {
            $credentials = $request -> validate([
                'email' => ['required', 'email', 'max:255', 'exists:users'],
                'password' => ['required', 'min:6'],
            ]);
        } catch (\Exception $e) {
            return back() -> with('failedLogin', 'Cek Email dan Password anda!!!') -> withInput( $request->except('password') );
        }
     
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect() -> intended(route('dashboard')) -> with('successLogin', 'Berhasil Melakukan Login');
        }

        return back() -> with('failedLogin', 'Cek Email dan Password anda!!!') -> withInput( $request->except('password') );
    }

    public function logout (Request $request)
    {
        Auth::logout();
     
        $request -> session() -> invalidate();
     
        $request -> session() -> regenerateToken();
     
        return redirect() -> route('login') -> with('successLogout', 'Berhasil Melakukan Logout');
    }

    public function register (Request $request)
    {
        try {
            $newUser = $request -> validate([
                'email' => ['required', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'min:6'],
            ]);
        } catch (\Exception $e) {
            return response() -> json ([
                'status' => false,
                'data' => NULL,
                'message' => $e -> getMessage(),
            ]);
        }

        User::create($newUser);

        // return redirect('/') -> with('success', 'Berhasil Mendaftarkan Akun');
        return response() -> json ([
            'status' => true,
            'message' => 'Berhasil Mendaftarkan Akun',
            'data' => $newUser,
        ]);
    }

    public function sendEmailForgetPassword (Request $request) 
    {
        try {
            $validate = $request -> validate([
                'email' => ['required', 'email', 'max:255', 'exists:users'],
            ]);
        } catch (\Exception $e) {
            return back() -> withInput() -> with('failedForgetPassword', 'Gagal mengirim kode OTP, cek email anda');
        }

        $user = User::firstWhere('email', $validate['email']);

        if (!$user -> otp) {
            $validate['otp'] = Str::lower(Str::random(6));
            User::where('email', $validate['email']) -> update(['otp' => $validate['otp']]);
        }

        try {
            if (!$user -> otp) {
                Mail::to($validate['email']) -> send(new TokenSender([
                    'email' => $validate['email'],
                    'token' => $validate['otp'],
                ]));
            }
        } catch (\Exception $e) {
            return back() -> withInput() -> with('failedForgetPassword', 'Gagal mengirim kode OTP, cek email anda');   
        }

        $email = $validate['email'];

        $request -> session() -> flash('successSendOTP', $email);
        return view('forgetPasswordOTP', ['email' => $email]);
    }

    public function otpCheck (Request $request) 
    {
        try {
            $validate = $request -> validate([
                'email' => ['required', 'email', 'max:255', 'exists:users'],
                'otp' => ['required', 'min:6', 'max:6', 'exists:users'],
            ]);
        } catch (\Exception $e) {
            $request -> session() -> flash('failedSendOTP', 'Kode OTP tidak sesuai');
            return view('forgetPasswordOTP', ['email' => $request['email']]);
        }

        $request -> session() -> flash('successCheckOTP', 'Kode OTP sesuai');
        return view('createNewPassword', [
            'email' => $request['email'],
            'otp' => $request['otp']
        ]);
    }

    public function changePassword (Request $request) 
    {
        try {
            $validate = $request -> validate([
                'email' => ['required', 'email', 'max:255', 'exists:users'],
                'otp' => ['required', 'min:6', 'max:6', 'exists:users'],
                'password' => ['required', 'min:6', 'confirmed'],
                'password_confirmation' => ['required', 'min:6'],
            ]);

            $validate['newPassword'] = Hash::make($validate['password']);
        } catch (\Exception $e) {
            $request -> session() -> flash('failedCreateNewPassword', 'Gagal membuat kata sandi baru');
            return view('createNewPassword', [
                'email' => $request['email'],
                'otp' => $request['otp']
            ]);
        }

        User::where(['email' => $validate['email'], 'otp' => $validate['otp']]) -> update(['password' => $validate['newPassword'], 'otp' => NULL]);

        Arr::pull($validate, 'newPassword');

        $request -> session() -> flash('successCreateNewPassword', 'Berhasil membuat kata sandi baru');
        return redirect() -> route('login');
    }
}
