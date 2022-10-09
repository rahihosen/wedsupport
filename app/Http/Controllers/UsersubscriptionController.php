<?php

namespace App\Http\Controllers;

use App\Models\Usersubscription;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class UsersubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();
        // dd($user->id);
        $orderinternal = Usersubscription::create([
            'user_id' => $user->id,
            'payment_method' => $request->payment_method,
            'package_name' => $request->package_name,
            'payment_money' => $request->amount,
            'time' => $request->time,
            'payment_from_phone_num' => $request->bkash_or_nagad_num,
            'payment_transaction_id' => $request->transaction_id,



        ]);
        return redirect()->route('redirects')->with('success', 'Thank you for subscription!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usersubscription  $usersubscription
     * @return \Illuminate\Http\Response
     */
    public function show(Usersubscription $usersubscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usersubscription  $usersubscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Usersubscription $usersubscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usersubscription  $usersubscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usersubscription $usersubscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usersubscription  $usersubscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usersubscription $usersubscription)
    {
        //
    }
}
