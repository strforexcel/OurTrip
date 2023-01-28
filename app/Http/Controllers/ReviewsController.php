<?php

namespace App\Http\Controllers;

use App\Models\DetailWisata;
use App\Models\ReviewWisata;
use App\Models\DetailReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReviewsController extends Controller
{
    public function reviewAll(){
        $reviews = DB::table('detail_wisatas')->get();
        // dd($reviews);
        return view('reviews', compact(['reviews']));
    }

    public function toReview($id){
        $reviews = DB::table('detail_reviews')
        ->join('review_wisatas','detail_reviews.review_id','=','review_wisatas.id')
        ->join('detail_wisatas','detail_reviews.detail_id','=','detail_wisatas.id')
        ->where('detail_id', $id)->first();
        // dd($reviews);
        return view('reviews_detail', compact(['reviews']));
    }
}
