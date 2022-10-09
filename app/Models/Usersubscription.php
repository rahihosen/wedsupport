<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Usersubscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'purchase_date', 'subscription_start_date', 'subscription_end_date', 'approved', 'time', 'payment_method', 'package_name', 'payment_money', 'payment_from_phone_num', 'payment_transaction_id', 'created_at', 'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
        // OR return $this->belongsTo('App\User');
    }
}
