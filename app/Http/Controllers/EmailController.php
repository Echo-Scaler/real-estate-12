<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ComposeEmailModel;

class EmailController extends Controller
{
    // Email Compose
    public function EmailCompose()
    {
        // echo "Email Compose";die();
        // User table ထဲက role ကို 'agent' သို့ 'user' ဖြစ်တဲ့ လူတွေကို ရှာပြီး $data['get_email'] ထဲသိမ်း
        $data['getEmail'] = User::whereIn('role', ['agent','user'])->get();

        // to select multiple email return view
        return view('admin.email.compose', $data);
    }

    // Email Compose Post
    public function EmailComposePost(Request $request)
    {
        // dd($request->all());

        $composeEmail = new ComposeEmailModel();

        $composeEmail->user_id = $request->user_id;
        $composeEmail->cc_email =trim($request->cc_email);
        $composeEmail->subject = trim($request->subject);
        $composeEmail->descriptions = trim($request->descriptions);
        // Laravel automatically handles timestamps; no need to assign manually
        $composeEmail->save();

        return redirect()->back()->with('success', 'Email Compose Successfully');
    }
}
