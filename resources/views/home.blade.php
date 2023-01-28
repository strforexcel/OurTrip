@extends('layouts.master')
@section('title','Home')

@section('container')
<section
    class="hero"
    id="hero"
    style="background-repeat: no-repeat; background-size: cover; height: 100vh; background-image: url('https://tourism.mizoram.gov.in/uploads/attachments/2022/02/ea06c674a9b1ec2c55fe3fe04cbbaa07/20201127090232-img-0963-2a.jpg');">

    <div
    class="hero-content h-100 d-flex justify-content-center align-items-center flex-column">
      <h1 class="text-center text-white display-4" style="font-size: 3rem; color:rgb(32, 133, 142);text-shadow: 1px 1px 2px #45A1B6, 0 0 1em white, 0 0 0.2em white;">
      Travel to the most beautiful places in the world, like Serlui River
      </h1>
      <form class="d-flex mb-5" action={{ route('search') }} method="POST">
        @csrf
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-secondary" type="submit">
            Search
        </button>
    </form>
    </div>
 <!--=============== Destination ===============-->
<section>
    <div class="row row-cols-10 row-cols-md-3 g-4 pt-5 px-5 d-flex justify-content-center">

        @foreach ($reviews as $r)

        <div class="card cards m-4 pt-2 shadow p-3 mb-5 bg-white rounded" style="width: 23rem;overflow: hidden">
            <a class="col" href="{{"/reviews_detail/$r->id"}}" style="color: #000000; text-decoration: none">
                <div class="img" style="display: flex; justify-content: center;">
                    <img src="{{asset('assets/foto_wisata/'.$r->foto)}}" alt="" style="display: flex; width: 300px; height: 200px; object-fit: cover;padding-top: 20px">
                </div>
                <div class="card-body">
                <h5 class="card-title">{{$r->nama_tempat}}</h5>
                <p class="card-text">{{$r->deskripsi}}</p>
                </div>
            </a>
        </div>
        @endforeach


    </div>
        </div>
      </section>
@endsection

