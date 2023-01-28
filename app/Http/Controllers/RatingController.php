<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rating;
use App\Models\DetailWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;

class RatingController extends Controller
{
    public function ratings($id){
        Session::put('page', 'ratings');
        $ratings = Rating::with(['user', 'wisata'])->where('wisata_id', $id)->get()->toArray();
        // dd($ratings);
        $reviews = DB::table('detail_reviews')
        ->join('review_wisatas','detail_reviews.review_id','=','review_wisatas.id')
        ->join('detail_wisatas','detail_reviews.detail_id','=','detail_wisatas.id')
        ->where('detail_id', $id)->first();
        // dd($reviews);
        $reviews = DetailWisata::find($id);
        return view('reviews_detail', compact(['ratings', 'reviews']));
    }

    public function addRating(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            if(!Auth::check()){
                $message = "Please login to add review";
                Session::flash('error_message', $message);
                return redirect()->back();
            }

            if(isset($data['rate'])){
                $message = "Please add the star!";
                Session::flash('error_message', $message);
                return redirect()->back();
            }
            die;

            // $ratingCount = Rating::where (['user_id'=>Auth::user()->id, 'wisata_id'=>$data['wisata_id']])->count();
            // if($ratingCount>0){
            //     $message = "Your rating already exist for this Destination";
            //     Session::flash('error_message', $message);
            //     return redirect()->back();
            // }else{
                $rating = new Rating;
                $rating->user_id = Auth::user()->id;
                $rating->wisata_id = $data['wisata_id'];
                $rating->review = $data['review'];
                $rating->rating = $data['rate'];
                $rating->status = 0;
                $rating->save();
                $message = "Thanks for rating this product!";
                Session::flash('success_message', $message);
                return redirect()->route('reviews_detail');
            // }
        }
    }
}
