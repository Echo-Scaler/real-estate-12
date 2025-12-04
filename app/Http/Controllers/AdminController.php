<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash as Hash;
use Illuminate\Support\Str as SupportStr;
use Str;


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

    public function AdminProfile(Request $request)
    {
        $data['adminProfile'] = User::find(Auth::user()->id);
        // echo "Admin Profile";die();
        return view('admin.admin_profile', $data);
    }

    // send data to admin_profile_update.blade.php by post of "adminProfile" Name
    public function AdminProfileUpdate(Request $request)
    {
        $user = request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::user()->id,
            'phone' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'address' => 'required|string|max:255',
            'about' => 'required|string|max:255',
            'website' => 'required|string|max:255',
        ]);
        // dd($request->all());
        $user = User::find(Auth::user()->id);
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->phone = trim($request->phone);
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = SupportStr::random(30) . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('upload/admin_photo'), $photoName);
            $user->photo = $photoName;
        }
        $user->address = trim($request->address);
        $user->about   = trim($request->about);
        $user->website = $request->website;
        $user->save();

        return redirect('admin/profile')->with('success', 'Admin Profile Update Successfully. . .');

        // dd($user);
    }

    // Admin Users
    public function AdminUsers(Request $request)
    {
        $data['getRecord'] = User::getRecord();
        // return view('admin.users', $data);
        return view('admin.users.list', $data);

        // echo "Admin Users";die();
    }

    public function AdminUsersView(Request $request, $id)
    {
        // echo "Error";die();
        $data['getRecord'] = User::single_record($id);
        return view('admin.users.view', $data);
    }
}
