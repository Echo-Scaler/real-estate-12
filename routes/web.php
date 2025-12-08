<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mime\Email;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Admin
Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard');
    Route::get('admin/logout',[AdminController::class,'AdminLogout'])->name('admin.logout');
    Route::get('admin/profile',[AdminController::class,'AdminProfile'])->name('admin.profile');
    Route::post('admin_profile/update',[AdminController::class,'AdminProfileUpdate'])->name('admin_profile_update');
    //users show table
    Route::get('admin/users',[AdminController::class,'AdminUsers'])->name('admin.users');
    // for view single record
    Route::get('admin/users/view/{id}',[AdminController::class,'AdminUsersView'])->name('admin.users.view');

    //Email Controller
    Route::get('admin/email/compose',[EmailController::class,'EmailCompose'])->name('admin.email.compose');
    Route::post('admin/email/compose_post',[EmailController::class,'EmailComposePost'])->name('admin.email.compose_post');
    // // CRUD
    // Route::get('admin/users/edit/{id}',[AdminController::class,'AdminUsersEdit'])->name('admin.users.edit');
    // Route::post('admin/users/update/{id}',[AdminController::class,'AdminUsersUpdate'])->name('admin.users.update');
    // Route::get('admin/users/delete/{id}',[AdminController::class,'AdminUsersDelete'])->name('admin.users.delete');
});

//Agent
Route::middleware(['auth','role:agent'])->group(function(){
    Route::get('agent/dashboard',[AgentController::class,'AgentDashboard'])->name('agent.dashboard');
});

// logIn Form  route
Route::get('admin/login',[AdminController::class,'AdminLogin'])->name('admin.login');


















//User
Route::middleware(['auth','role:user'])->group(function(){
    Route::get('user/dashboard',[UserController::class,'UserDashboard'])->name('user.dashboard');
});







