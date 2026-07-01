<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AccountController extends Controller
{
    // this method will be  registracion pages
    public function registraction (){
  return  view('front.account.registraction');
    }

    // this  method will be show   login pages
    public function  login()  {
        return  view('front.account.login');
        
    }

// authenticate concept

    public function authenticate(Request $request)
{
    if (Auth::attempt([
        'email' => $request->email,
        'password' => $request->password
    ])) {

        return response()->json([
            'status' => true,
            'message' => 'Login Successful'
        ]);

    } else {

        return response()->json([
            'status' => false,
            'message' => 'Invalid Email or Password'
        ]);

    }
}




public function logout()
{
    Auth::logout();

    return redirect('/login');
}

    public function forgot(){
        return view ('front.account.forgot');

    }

    
   public function processRegistration(Request $request) {
    
    // 1️ Validation Rules
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',  
        'password' => 'required|min:5|same:confirm_password',
        'confirm_password' => 'required',
    ]);

    // 2️ Agar validation fail hoti hai
    if ($validator->fails()) {
        return response()->json([
            'status' => false,
            'errors' => $validator->errors()
        ]);
    }

    // 3️Agar validation pass hoti hai (User save karein)

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);  // 🆕 Password hash karein
    $user->save();

    // 4️ Success Response

       
    return response()->json([
        'status' => true,
        'message' => 'Registration successful!',
        'user' => $user
    ]);
}
}
