<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\UserAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login()
    {
        // dd(UserAdmin::all()->toArray());
        // dd(md5(123456), md5(123456),md5(123456));
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.index');
        }
        // dd(Auth::guard('admin')->check());
        return view("backend/login");
    }
    public function postlogin(Request $Request)
    {
        $Username = $Request->Username;
        $Password = $Request->Password;
        if(Auth::guard('admin')->attempt(['Username' => $Username, 'Password' => $Password])){
            // dd(Auth::attempt(['Username' => $Username, 'Password' => $Password]));
            return redirect('admin');
        }
        else{
            // dd($Username,$Password);
            // dd(Auth::guard('admin'));

            dd(Auth::guard('admin')->attempt(['Username' => $Username, 'Password' => $Password]));
            return redirect()->back()->withErrors('Tài khoản hoặc mật khẩu không chính xác');
        }
    }
}
