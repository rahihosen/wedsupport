<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'block_id'
    ];

    public function user()
    {
        return $this->belongsToMany('App\Models\User');
        // OR return $this->belongsTo('App\User');
    }
}
