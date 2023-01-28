@extends('layouts.master')
@section('title','News')

@section('container')

    <div class="card m-4 pt-2 shadow p-3 bg-white rounded" style="width: 97%;height: 1000px;overflow: hidden">
        <div class="card-body">
            <h2 class="card-title p-2" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"><strong>{{$news->title}}</strong></h2>
            <div class="p-2">
                {{ $news->timestamp->format('M d, Y') }}
                <br>
                {{$news->author}}
            </div>

            <br>
            <br>
            <div class="d-flex justify-content-center">
                <img src="/assets/{{$news->image}}" class="card-img-top" style="height: 300px; width: 50%;">
            </div>
            <br>
            <div class="card-body">
                {{$news->description}}
            </div>
        </div>
    </div>

@endsection
