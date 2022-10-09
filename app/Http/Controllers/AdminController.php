<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Usersubscription;

class AdminController extends Controller
{
    public function user()
    {
        $users = user::all();
        $date = now();
        $members = Usersubscription::where('approved', '=', 'yes')->where('subscription_end_date', '>', $date)->with('user')->get();
        return view('admin.users', compact("users", "members"));
    }

    // public function AdminLogin(Request $request)
    // {

    //     $email = $request->username;
    //     $pass = $request->password;

    //     if($email == 'admin' && $pass == '123'  ){
    //         $users = user::all();
    //         $date = now();

    //         $members = Usersubscription::where('approved', '=', 'yes')->where('subscription_end_date', '>', $date)->with('user')->get();
    //     }
    //     return view('admin.users', compact("users", "members"));

    // }

    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }


    //member request function
    public function memberRequest()
    {
        $users = Usersubscription::where('approved', '=', 'no')->get();
        return view('admin.memberRequest', compact("users"));
    }

    public function memberApproved(Request $request, $id)
    {
        $validated = $request->validate([
            'time' => 'required',
        ]);

        $usersubscription = Usersubscription::with('user')->find($id);
        // dd($usersubscription->user->name);
        $date = $usersubscription->created_at;
        $now = now();
        $month = $request->time;
        $new_date = date("Y-m-d H:i:s", strtotime("+$month months", strtotime($now)));
        $usersubscription->purchase_date = $date;
        $usersubscription->subscription_start_date = $now;

        $usersubscription->subscription_end_date = $new_date;
        $usersubscription->approved = 'yes';
        $usersubscription->user->usertype = 1;
        $usersubscription->push();
        return redirect('/member_request')->withMessage('Member Approved!');
    }
    public function memberCreate(Request $request, $id)
    {
        $now = now();
        $month = $request->time;
        $subscrippption_end_date = date("Y-m-d H:i:s", strtotime("+$month months", strtotime($now)));
        $orderinternal = Usersubscription::create([
            'user_id' => $id,
            'purchase_date' => $now,
            'subscription_start_date' => $now,
            'subscription_end_date' => $subscrippption_end_date,
            'approved' => 'yes',
            'payment_method' => $request->payment_method,
            'package_name' => $request->package_name,
            'payment_money' => $request->payment_money,
            'time' => $request->time,
            'payment_from_phone_num' => $request->bkash_or_nagad_num,
            'payment_transaction_id' => $request->transaction_id,
        ]);
        $user = User::find($id);
        $user->usertype = 1;
        $user->save();
        return redirect()->route('redirects')->with('success', 'Member add successfully');
    }

    // public function changeUserStatus(Request $request)
    // {
    //     $user = user::find($request->user_id);
    //     $user->status = $request->status;
    //     $user->save();

    //     return response()->json(['success'=>'User status change successfully.']);
    // }

}
