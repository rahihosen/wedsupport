<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use App\Models\Block;
use App\Models\Userprofile;
use Illuminate\Http\Request;

use PhpParser\Node\Expr\Array_;
use App\Models\Usersubscription;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $feather_profile = User::inRandomOrder()->limit(6)->get();
        $review = Review::inRandomOrder()->limit(2)->get();
        return view('pages.index')->with(compact('feather_profile', 'review'));
    }

    public function logout()
    {
        $user = auth()->user();
        auth()->logout();
        $feather_profile = User::inRandomOrder()->limit(6)->get();
        $review = Review::inRandomOrder()->limit(2)->get();
        return view('pages.index')->with(compact('feather_profile', 'review'));
    }
    public function redirects()

    {
        $user_id = Auth::user()->id;
        // dd($user_id);
        // $block = Block::where('user_id', '=', $user_id)->get();
        // $block_id = $block->pluck('block_id');
        // $new_id = $block_id->all();
        // $new_id = $block_id->all();
        // foreach ($block as $block) {
        //     $block_id = $block->block_id;
        //     $data = user::with('userProfile', 'block')->where('id', '!=', $block_id)->get();
        // }
        // dd(count($new_id));
        // if ($new_id != null) {
        //     for ($i = 0; $i < count($block_id); $i++) {
        //         $data = user::with('userProfile')->where('id', '!=', $block_id)->get();
        //     }
        // } else {
        //     $data = user::with('userProfile')->where('id', '!=', $user_id)->get();
        // }
        $data = user::with('userProfile')->where('id', '!=', $user_id)->get();
        // $subset = $data->skipWhile(function ($user_id) {
        //     return $user_id = $block_id->all();
        // });
        // $subset->all();
        // dd($data);        
        $usertype = Auth::user()->usertype;
        $isBan = Auth::user()->isBan;
        if ($usertype == '1' && $isBan == '0') {
            $user = Auth::user();

            $sub = User::find($user->id)->userSubscription;
            if ($sub->subscription_end_date > now()) {
                return view('member', compact('data'));
            }
            if ($sub->subscription_end_date < now()) {
                $data1 = array('usertype' => 2);
                $usertemp = user::where('id', '=', $user_id)->update($data1);

                $user->userSubscription->delete();
                $sub = User::find($user->id)->userSubscription;
                $data = user::where('id', '!=', $user_id)->get();
                return view('visitor')->with('data', $data)->with('sub', $sub);
            }
        }
        if ($usertype == '2' && $isBan == '0') {
            $user = Auth::user();
            $sub = User::find($user->id)->userSubscription;
            return view('visitor', compact('data', 'sub'));
        }
        if ($usertype == '0' && $isBan == '0') {

            //return view('admin.index');
            $users = user::all();
            $date = now();
            $members = Usersubscription::where('approved', '=', 'yes')->where('subscription_end_date', '>', $date)->with('user')->get();
            return view('admin.users')->with(compact('users', 'members'));
        } else {
            $user = auth()->user();
            auth()->logout();
            return view('auth.login');
        }
    }
}