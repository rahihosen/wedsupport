<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function addReview(){
        return view('review.addreview');
    }
    public function storeReview(){
        request()->validate([
            'review' => 'required'
        ]);
        Review::create([
            'user_id' => auth()->user()->id,
            'review' => request('review')
        ]);
        return back();
    }
}
