@extends('layouts.master')
@section('title','Reviews')

@section('container')
<style>
    .rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
</style>
    <div id="card-container">
        <div id="card" style="position: relative; text-align: center">
            <div class="img-container" style="display: flex; justify-content: center">
                <img src="{{asset('assets/foto_wisata/'.$reviews->foto)}}" alt="" style="height: 500px; width: 2000px; object-fit: none" >
            </div>

            <div class="text" style="color: white; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-shadow: 4px 4px 4px #20858E;">
                <h1 style="font-size: 4rem; -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: rgb(0, 0, 0)">{{$reviews->nama_tempat}}</h1>
                <h1 style="font-size: 50px; -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: rgb(0, 0, 0)">{{$reviews->lokasi}}</h1>
                <br><br><br>
                <h3 style="font-size: 20px">{{$reviews->deskripsi}}</h3>
            </div>
            <br><br>
        </div>
    </div>

    <div class="card m-4 shadow p-3 bg-white rounded h-50" style="width: 97%;height: 1000px;overflow: hidden">
        <div class="card-body">
            <h3>USER REVIEW</h3>
            <br>
            <div class="row">
                @foreach ($ratings as $r)
                <div class="col-sm-4">
                    <div class="card p-2 m-4" style="width: 300px">
                        <div class="card-header">
                            <p class="card-title">{{$r['user']['username']}} || {{$r['user']['email']}}</p>
                        </div>
                        <div class="card-body">
                            <?php
                                $count=1;
                                while($count<=$r['rating']){?>
                                    <span>&#9733</span>
                            <?php $count++;} ?>
                            <p>{{$r['review']}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="card m-4 pt-2 shadow p-3 bg-white rounded h-50" style="width: 97%;height: 1000px;overflow: hidden">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Write a Review</h3>
                    <div class="input" style="display: flex; flex-direction: row">
                        <form method="POST" action="{{url('/add-rating')}}" name="formRating" id="formRating">@csrf
                            <input type="hidden" name="wisata_id" value="{{$reviews->id}}">
                            <div class="rate">
                                <input type="radio" id="star5" name="rating" value="5" />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rating" value="4" />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rating" value="3" />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rating" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rating" value="1" />
                                <label for="star1" title="text">1 star</label>
                            </div>
                            <div class="form-group">
                                <label for="">Your Review</label>
                                <textarea name="review" style="width: 300px; height: 100px;"></textarea>
                            </div>
                            <div>&nbsp;</div>
                            <div class="form-group">
                                <input type="submit" name="Submit">
                            </div>
                            <br>
                            @if(Session::has('error_message'))
                                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('error_message') }}</p>
                            @endif
                            @if(Session::has('success_message'))
                                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success_message') }}</p>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
