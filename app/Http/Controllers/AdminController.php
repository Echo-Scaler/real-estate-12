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
        // echo "Admin Dashboard";die();
        $user = User::selectRaw('count(id) as count, DATE_FORMAT(created_at, "%Y-%m-%d") as month')
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get();
        $data['months'] = $user->pluck('month');
        $data['counts'] = $user->pluck('count');
        return view('admin.index',$data);
        // bar char montly users
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
        // $data['getRecord'] = User::getRecord(); => first list conditions
        $data['getRecord'] = User::getRecord($request);  //search form conditions
        $data['request'] = $request;
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

    // Admin Users Add
    public function AdminUsersAdd(Request $request)
    {
        // echo "Admin Users Add";die();
        return view('admin.users.add');
    }

    public function AdminUsersAddStore(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'role' => 'required|in:admin,user,agent',
            'status' => 'required|in:active,inactive',
            'address' => 'required|string|max:255',
            'about' => 'required|string',
            'website' => 'required|string|max:255',
        ]);


        $user = new User();
        $user->name = trim($request->name);
        $user->username = trim($request->username);
        $user->email = trim($request->email);
        $user->phone = trim($request->phone);
        // $user->password = Hash::make($request->password);
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = SupportStr::random(30) . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('upload/admin_photo'), $photoName);
            $user->photo = $photoName;
        }
        $user->role = trim($request->role);
        $user->status = trim($request->status);
        $user->address = trim($request->address);
        $user->about   = trim($request->about);
        $user->website = $request->website;
        // dd($user);
        $user->save();
        return redirect('admin/users')->with('success', 'Add Admin Users Successfully. . .');
    }

    // Admin Users Edit
    public function AdminUsersEdit(Request $request, $id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

}
