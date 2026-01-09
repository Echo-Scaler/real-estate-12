<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserTimeController;
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

require __DIR__ . '/auth.php';

//Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('admin_profile/update', [AdminController::class, 'AdminProfileUpdate'])->name('admin_profile_update');


    //users show table
    Route::get('admin/users', [AdminController::class, 'AdminUsers'])->name('admin.users');
    Route::get('admin/users/view/{id}', [AdminController::class, 'AdminUsersView'])->name('admin.users.view');
    Route::get('admin/users/add', [AdminController::class, 'AdminUsersAdd'])->name('admin.users.add');
    Route::post('admin/users/add', [AdminController::class, 'AdminUsersAddStore'])->name('admin.users.add');
    Route::get('admin/users/edit/{id}', [AdminController::class, 'AdminUsersEdit'])->name('admin.users.edit');
    Route::put('admin/users/update/{id}', [AdminController::class, 'AdminUsersUpdate'])->name('admin.users.update');
    Route::get('admin/users/delete/{id}', [AdminController::class, 'AdminUsersDelete'])->name('admin.users.delete');
    Route::post('admin/users/changeStatus', [AdminController::class, 'AdminUsersChangeStatus'])->name('admin.users.changeStatus');
    Route::get('admin/my_profile', [AdminController::class, 'AdminMyProfile'])->name('admin.my_profile');
    Route::post('admin/my_profile/update', [AdminController::class, 'AdminMyProfileUpdate'])->name('admin.my_profile_update');


    //Email Controller
    Route::get('admin/email/compose', [EmailController::class, 'EmailCompose'])->name('admin.email.compose');
    Route::post('admin/email/compose_post', [EmailController::class, 'EmailComposePost'])->name('admin.email.compose_post');
    Route::get('admin/email/sent', [EmailController::class, 'SentComposePost'])->name('admin.email.sent');
    Route::get('admin/email_sent', [EmailController::class, 'EmailSentDelete'])->name('admin.email_sent.delete');
    Route::get('admin/email_sent/read/{id}', [EmailController::class, 'EmailSentRead'])->name('admin.email_sent.read');
    Route::get('admin/email/read_delete/{id}', [EmailController::class, 'admin_email_read_delete'])->name('admin.email.read_delete');
});

    // user week start
    Route::get('admin/week', [UserTimeController::class, 'week_list'])->name('admin.week');
    Route::get('admin/week/add', [UserTimeController::class, 'week_add'])->name('admin.week.add');
    Route::post('admin/week/add', [UserTimeController::class, 'week_add_store'])->name('admin.week.add.store');
    Route::get('admin/week/edit/{id}', [UserTimeController::class, 'week_edit'])->name('admin.week.edit');
    Route::put('admin/week/update/{id}', [UserTimeController::class, 'week_update'])->name('admin.week.update');
    Route::get('admin/week/delete/{id}', [UserTimeController::class, 'week_delete'])->name('admin.week.delete');

// // week time start



//Agent
Route::middleware(['auth', 'role:agent'])->group(function () {
    Route::get('agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');
});


//set_new_password
Route::get('set_new_password/{token}', [AdminController::class, 'set_new_password']);
Route::post('set_new_password/{token}', [AdminController::class, 'set_new_password_post']);



// logIn Form  route
Route::get('admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');



//User
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('user/dashboard', [UserController::class, 'UserDashboard'])->name('user.dashboard');
});
