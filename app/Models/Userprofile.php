<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Userprofile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','b_date','password','country','state','city','religion',
        'status','profession','school','college','university','subject','height','phone_number','gender',
        'weight','blood_group','drink', 'smoke','place_of_birth','annual_income' ,'fathers_occupation' ,
        'mothers_occupation','no_of_brother' ,'no_of_sister' ,
        'imagePath', 'imagePath1', 'imagePath2', 'imagePath3',
        'p_country','p_state','p_city','p_religion','p_status','p_profession','p_gender','from_age','to_age','comment','age',
        'created_by','blur',

    ];




    public $timestamps = true;

    protected $table = "userprofiles";

    /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
        // OR return $this->belongsTo('App\User');
    }
}