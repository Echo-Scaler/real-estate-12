<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ComposeEmailModel;
use Illuminate\Support\Facades\Mail; //mail facade added
use App\Mail\ComposeEmailMail; //mail class added


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
        $save = new ComposeEmailModel;

        $save->user_id = $request->user_id;
        $save->cc_email =trim($request->cc_email);
        $save->subject = trim($request->subject);
        $save->descriptions = trim($request->descriptions);
        // Laravel automatically handles timestamps; no need to assign manually
        $save->save();

        //email start send - mail facade used
        // user id = $request->user_id နဲ့ ကိုယ့် email ကို ရှာပြီး $getUserEmail ထဲသိမ်း

        $getUserEmail = User::where('id','=',$request->user_id)->first();
        Mail::to($getUserEmail->email)->cc($request->cc_email)->send(new ComposeEmailMail($save));
        //email end send

        return redirect('admin/email/compose')->with('success', 'Email Compose Successfully');
    }

    public function SentComposePost(Request $request)
    {
        // echo "hhh";die();
        $data['getEmail'] = ComposeEmailModel::orderByDesc('id')->paginate(10);
        return view('admin.email.sent', $data)->with('success', 'Email Compose Successfully');
    }

    // Email Sent Delete
    public function EmailSentDelete(Request $request)
    {
        // echo $id;die();
        if(!empty($request->id))
        {
            $option = explode(',',$request->id);
            foreach($option as $id)
            {
                if(!empty($id))
                {
                    $getRecord = ComposeEmailModel::find($id);
                    $getRecord->delete();
                }
            }
        }
        return redirect()->back()->with('success', 'Email Sent Delete Successfully');
    }
}
