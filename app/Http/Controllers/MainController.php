<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\DetailWisata;
use App\Models\ReviewWisata;
use Database\Seeders\NewsSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{

    public function index(){
        return view('home');
    }

    public function out(Request $req){
        Auth::logout();
        return redirect()->to('/');
    }

    public function reviewAll(){
        $reviews = DB::table('detail_wisatas')->get();
        return view('home', compact(['reviews']));
    }

    public function search(Request $request){
        $reviews = DetailWisata::where('nama_tempat', 'like', '%' . $request->search . '%')->paginate(10)->withQueryString();
        return view('search', compact('reviews'));
    }

      public function searchPage(Request $request)
    {
         if ($request->search == null)
          $reviews = DetailWisata::where('is_deleted', false)->get();
         else
             $reviews = DetailWisata::where('nama_tempat', 'like', '%' . $request->search . '%')->paginate(10)->withQueryString();
        return view('search', compact('reviews'));
     }


}
