<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Auth;

class AdminController extends Controller
{
    public function AdminDashboard(Request $request)
    {
       return view('admin.index');
        // die();
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
        // echo 'Logout Successfully';die();
    }

    public function AdminLogin(Request $request)
    {
        // echo "Login Successfully";die();
        return view('admin.admin_login');
    }
}
