<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index()
    {
        // dd(Auth::guard('admin')->user());
        return view('backend/index');
    }
    public function logout(Request $request)
    {
        // $request->session()->forget('email');
        Auth::guard('admin')->logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();
        // $request->session()->flush();

        // return redirect()->route('adminlogin.login');
    }
}
