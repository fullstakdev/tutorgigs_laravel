<?php

namespace App\Http\Controllers;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Admin;
use App\Tutor;

class AuthController extends Controller
{
    
   public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
    public function postLogin(Request $request)
    {
        $email = $request->input('email'); 
        $password = $request->input('password');
        $role = $request->input('role');
         
        if($role == 'administrator')
        {
            if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password]))
            {
                return redirect('dashboard')->with('success', 'Success: You have successfully logged in.');

            }
            else
            {
                $admin = Admin::where('email', '=', $email)->first();

                if(isset($admin)) { 

                        $admin->password = bcrypt($password); // Convert to new format
                        $admin->save();

                        if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password]))
                            return redirect('dshboard')->with('success', 'Success: You have successfully logged in.');
                        else
                            return redirect('login')->with('danger', 'You entered wrong email/password.');

                }
                else
                    return redirect('login')->with('danger', 'You entered wrong email/password.');

            }
        }
        else
        {
            if (Auth::guard('tutor')->attempt(['email' => $email, 'password' => $password]))
            {
                return redirect('tutor/dashboard')->with('success', 'Success: You have successfully logged in.');

            }
            else
            {
                $tutor = Tutor::where('email', '=', $email)->first();

                if(isset($tutor)) { 

                        $tutor->password = bcrypt($password); // Convert to new format
                        $tutor->save();

                        if (Auth::guard('tutor')->attempt(['email' => $email, 'password' => $password]))
                            return redirect('tutor/dashboard')->with('success', 'Success: You have successfully logged in.');
                        else
                            return redirect('login')->with('danger', 'You entered wrong email/password.');

                }
                else
                    return redirect('login')->with('danger', 'You entered wrong email/password.');

            }
        }
         
    }
    
    public function partnerLogin(Request $request)
    {
        $email = $request->input('email'); 
        $password = $request->input('password');
     
        $partner = Partner::where('email',$email)->first();
        $partner->password = bcrypt("school123");
        $partner->save();    
        
        if (Auth::guard('partner')->attempt(['email' => $email, 'password' => $password]))
        {
           
              return redirect('partner/dashboard')->with('success', 'Success: You have successfully logged in.');
          
        }
        else
           return redirect('partner/login')->with('danger', 'You entered wrong email/password.');
         
    }
    public function setLanguage(Request $request)
    {
        $lang = $request->locale;
         $request->session()->put('lang', $lang); 
         return redirect()->back();
    }
    public function doLogin(Request $request)
    {
        
        $username = $request->input('username');
        $password = $request->input('password');
        
           
        if (Auth::guard('user')->attempt(['username' => $username, 'password' => $password,'status' => 1]))
        {
            $login = new UserLogin;
            $login->user_id = Auth::guard('user')->id();
            $login->save();

           return redirect('checkin')->with('success', 'Success: You have successfully logged in.');
        }
        else
           return redirect('login')->with('danger', 'Username or Password is not correct.');
         
    }
    public function partner_logOut(Request $request)
    {
      
        Auth::guard('partner')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return  redirect('/');
    }
    
    public function logOut(Request $request)
    {
      
        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return  redirect('backoffice/login');
    }
    public function userLogOut(Request $request)
    {
      
        Auth::guard('user')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return  redirect('login');
    }
    
    public function submit_signup(Request $request)
    {
        $signup_state_arr = array('step_1' =>0, 'step_2' => 0, 'step_3' => 0,'step_4' => 0,'email_confirm' => 1,'can_access_website' => 0,'status_to_login' =>1); 
        $state_str = serialize($signup_state_arr);
        
        $email    = $request->input('email');
        $password = bcrypt($request->input('email'));
        $f_name   = $request->input('f_name');
        $lname    = $request->input('lname');
        $phone    = $request->input('phone');
        
        $code     = substr(md5(mt_rand()),0,15);
        $to       = $email;
        $code_url='https://tutorgigs.io/profile_confirm.php?code='.$code;
        
        
        $is_teacher = Tutor::where('email', $email)->count('id');
        if($is_teacher)
            return redirect('signup')->with('error', 'Email Already Exist ');
        else
        {
            $teacher = new Tutor;
            $teacher->email = $email;
            $teacher->f_name = $f_name;
            $teacher->lname = $lname;
            $teacher->phone = $phone;
            $teacher->password = $password;
            $teacher->code = $code;
            $teacher->signup_state = $state_str;
            $teacher->all_state_url = 'application.php';
            $insert = $teacher->save();
            
            if($insert)
                return redirect('signup')->with('success', 'A confirmation email has been sent to your email address. Please check your email to confirm your account.');
            else
                return redirect('signup')->with('error', 'Signup failed. Try again!!');
        }
    }

}


