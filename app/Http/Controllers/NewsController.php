<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Carbon\Carbon;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $news = News::all();
        return view('news', compact('news'));
    }

    public function newsDetail($id){
        $news = News::find($id);
        // $news = News::all();
        return view('news_detail', compact('news'));
    }

}
