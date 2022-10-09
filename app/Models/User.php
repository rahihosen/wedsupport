<?php

namespace App\Models;

use App\Models\Block;
use App\Models\Review;
use App\Models\Userprofile;
use App\Models\Usersubscription;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'last_name',
        'phone',
        'age',
        'email',
        'password',
        'usertype',
        'nid',
        'passport',
        'nid_copy',
        'profile_photo_path'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function userProfile()
    {
        return $this->hasOne('App\Models\Userprofile');
    }
    public function userSubscription()
    {
        return $this->hasOne('App\Models\Usersubscription');
    }

    public function block()
    {
        return $this->hasMany('App\Models\Block');
    }
    
     public function review()
    {
        return $this->hasMany('App\Models\Review');
    }
    
    
    
}
