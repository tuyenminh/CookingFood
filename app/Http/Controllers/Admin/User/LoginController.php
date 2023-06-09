<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    public function index () 
        {
            return view('admin.users.login' , ['title' => 'Đăng nhập Hệ thống']);
        }
        public function store (Request $request) {
            // dd($request->input());
            $this -> validate ($request, [
                'email' => 'required|email:dns',
                'password' => 'required'
            ]);
            
            if(Auth::attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password')
    
            ], $request->input('remember'))) {
                return redirect()->route('admin');
            }
            
            Session::flash('error','Email hoặc Mật khẩu không đúng!'); 
            return redirect()->back();
        }  
}

