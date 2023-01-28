@extends('layouts.master')
@section('title','News')

@section('container')
<section
    class="hero"
    id="hero"
    style="background-repeat: no-repeat; background-size: cover; height: 100vh; background-image: url('https://i.pinimg.com/originals/e7/f3/bf/e7f3bf4a7221be15b7c46b2560c6830f.jpg');">

 <!--=============== Header ===============-->
    <div class="container d-flex align-items-center text-center flex-column" style="height: 150px">
        <div>
            <h1 class="section-title opacity-75" style="font-size: 8rem; color: rgb(32, 133, 142); text-shadow: 4px 4px 4px #ffffff;"> <strong> NEWS  </strong></h1>
        </div>
        <div>
            <h2 class="section-title text-white" style="font-size: 4rem"> <strong> Newest News from us </strong></h2>
        </div>

    </div>
</section>
<section>
    <div class="row row-cols-10 row-cols-md-5 g-4 pt-5 px-5 d-flex justify-content-center">
    @foreach ($news as $berita)

    <div class="card cards m-4 pt-2 shadow p-3 mb-5 bg-white rounded" style="width: 23rem;overflow: hidden">
        <a class="col" href="/newsdetail/{{$berita->id}}" style="color: #000000; text-decoration: none">
        <img src="/assets/{{$berita->image}}" class="card-img-top" style="height: 200px">
        <div class="card-body">
          <h5 class="card-title" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"><strong>{{$berita->title}}</strong></h5>
          {{ $berita->timestamp->format('M d, Y') }}
        </div>
        </a>
    </div>

    @endforeach
    </div>

</section>

@endsection
