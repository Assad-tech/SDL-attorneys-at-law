<?php

namespace App\Http\Controllers;

use App\Mail\ForgetPassword;
use App\Mail\NewUserWelcomeEmail;
use App\Models\Property;
use App\Models\User;
use App\Models\UserPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class AuthController extends Controller
{

    // admin Login
    public function adminLogin()
    {
        return view('Admin.auth.adminLogin');
    }

    // Admin Login process
    public function AdminLoginProcess(Request $request)
    {

        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // dd($request);
        // $authen = $request->only('email', 'password');
        // return $authen;

        if (Auth::attempt($request->only('email', 'password'))) {
            if (Auth::user()->status == 1) {
                if (Auth::user()->role_id == '1') {
                    return redirect()->route('admin.dashboard');
                } else {
                    Auth::logout();
                    return redirect()->back()->with('error', 'You are not authorized to access this section');
                }
            } else {
                Auth::logout();
                return redirect()->back()->with('error', 'Your account is not active. Please contact the administrator');
            }
        }
        return redirect()->back()->with('error', 'Invalid credentials');
    }

    // // User Login
    // public function login()
    // {
    //     return view('user.auth.login');
    // }
    // //  Login process user
    // public function loginProcess(Request $request)
    // {

    //     $request->validate([
    //         'email' => 'required|string|email|exists:users,email',
    //         'password' => 'required|string'
    //     ]);
    //     $property = Property::latest()->get()->take(3);
    //     // dd($request);

    //     if (Auth::attempt($request->only('email', 'password'))) {
    //         if (Auth::user()->status == 1) {
    //             if (Auth::user()->role_id == '2') {

    //                 // return redirect()->route('frontend.homepage');
    //                 // return "your are login";
    //                 return view('User.home.index', [
    //                     'property' => $property
    //                 ]);
    //             } else {
    //                 Auth::logout();
    //                 return redirect()->back()->with('error', 'You are not authorized to access this section');
    //             }
    //         } else {
    //             Auth::logout();
    //             return redirect()->back()->with('error', 'Your account is not active. Please contact the administrator');
    //         }
    //     }

    //     return redirect()->back()->with('error', 'Invalid credentials');
    // }
    // // User Register
    // public function register()
    // {
    //     return view('Frontend.auth.register');
    // }
    // // User Register
    // public function registerProcess(Request $request)
    // {
    //     //  dd($request->all());
    //     $request->validate([
    //         'first_name' => 'required|string',
    //         'last_name' => 'required|string',
    //         'email' => 'required|string|email|unique:users,email',
    //         'password' => 'required|string|min:8|confirmed',
    //         'password_confirmation' => 'required',
    //         'terms_and_conditions' => 'accepted'
    //     ]);
    //     //  dd($request->all());
    //     $newUser = new User();
    //     $newUser->role_id = 2;
    //     $newUser->first_name = $request->first_name;
    //     $newUser->last_name = $request->last_name;
    //     $newUser->email = $request->email;
    //     $newUser->password = Hash::make($request->password);
    //     $newUser->status = 1;

    //     if ($newUser->save()) {
    //         // Automatically log in the user
    //         Auth::login($newUser);

    //         // Redirect to the frontend.homepage route
    //         return redirect()->route('frontend.homepage')->with('success', 'User registered and logged in successfully');
    //         // return redirect()->route('register')->with('success', 'User registered and logged in successfully');
    //     }

    //     return redirect()->route('register')->with('error', 'Something went wrong');
    // }
    // // User Forgot Password
    // public function forgotPassword()
    // {
    //     return view('Frontend.auth.forgotPassword');
    // }
    // // User Forgot Password
    // public function forgotPasswordProcess(Request $request)
    // {

    //     // dd($request);
    //     $request->validate([
    //         'email' => 'required|email|exists:users,email',
    //     ]);

    //     $user = User::where('email', $request->email)->first();

    //     if (!$user) {
    //         return redirect()->back()->with('error', 'Email not found');
    //     }
    //     $token = Str::random(64);

    //     DB::table('password_reset_tokens')->insert([
    //         'email' => $request->email,
    //         'token' => $token,
    //         'created_at' => Carbon::now()
    //     ]);

    //     $data = [
    //         'fullname' => $user->first_name . " " . $user->last_name,
    //         'token' => $token,
    //     ];
    //     Mail::to('assadullah.shaffshaw@gmail.com')->send(new ForgetPassword($data));
    //     return back()->with('success', 'We have e-mailed your password reset link!');
    // }
    // // User Reset Password
    // public function showResetPasswordForm($token)
    // {
    //     return view('Frontend.auth.resetPasswordLink', ['token' => $token]);
    // }
    // // User Reset Password
    // public function submitResetPasswordForm(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email|exists:users',
    //         'password' => 'required|string|min:8|confirmed',
    //         'password_confirmation' => 'required'
    //     ]);

    //     $updatePassword = DB::table('password_reset_tokens')
    //         ->where([
    //             'email' => $request->email,
    //             'token' => $request->token
    //         ])
    //         ->first();

    //     if (!$updatePassword) {
    //         return back()->withInput()->with('error', 'Invalid token!');
    //     }

    //     $user = User::where('email', $request->email)
    //         ->update(['password' => Hash::make($request->password)]);
    //     DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();
    //     return redirect()->route('login')->with('success', 'Your password has been changed!');
    // }
    // // User Logout
    // public function logout()
    // {
    //     Auth::logout();
    //     return redirect()->route('admin.login');
    // }
}
