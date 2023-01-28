@extends('layouts.master')
@section('title','search')

@section('container')

<form class="d-flex mb-5" action={{ route('search') }} method="POST">
    @csrf
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-secondary" type="submit">Search</button>
</form>

<div class="display-5 mb-5">Search Result</div>
<div class="d-flex flex-column" style="min-height: 100vh">

    <div class="row row-cols-1 row-cols-md-5 g-4 p-5" style="background: #e6e6e6">

        @foreach ($reviews as $review)
        <a class="col" style="text-decoration: none" href="/reviews_detail/{{$review->id}}">
            <div class="card h-100" style="width: 12rem; overflow: hidden">
                <img src="{{asset('assets/foto_wisata/'.$review->foto)}}" class="card-img-top" alt={{ $review->nama_tempat
                }} style="width: 12rem; height:12rem">
                <div class="card-body">
                    <p class="card-text" style="color: black">{{ $review->nama_tempat }}</p>
                </div>
            </div>
        </a>
        @endforeach
        @if (count($reviews) == 0)
        <div class="mb-5">No match reviews</div>

        @endif

    </div>

</div>
@endsection
