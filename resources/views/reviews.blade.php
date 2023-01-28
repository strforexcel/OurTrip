@extends('layouts.master')
@section('title','Reviews')

@section('container')
<section
    class="hero"
    id="hero"
    style="background-repeat: no-repeat; background-size: cover; height: 100vh; background-image: url('https://images.unsplash.com/photo-1612055859362-dc261d9f7358?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2071&q=80');">

    <div
    class="hero-content h-100 d-flex justify-content-center align-items-center flex-column">
        <div>
            <h1 class="section-title opacity-100" style="font-size: 8rem; color: rgb(32, 133, 142); text-shadow: 4px 4px 4px #ffffff;"> <strong> REVIEWS  </strong></h1>
        </div>
    </div>

    <section>


        <div class="row row-cols-10 row-cols-md-3 g-4 pt-5 px-5 d-flex justify-content-center">

            @foreach ($reviews as $r)

            <div class="card cards m-4 pt-2 shadow p-3 mb-5 bg-white rounded" style="width: 23rem;overflow: hidden;">
                <a class="col" href="{{"/reviews_detail/$r->id"}}" style="color: #000000; text-decoration: none">
                    <div class="img" style="display: flex; justify-content: center;">
                        <img src="{{asset('assets/foto_wisata/'.$r->foto)}}" alt="" style="display: flex; width: 300px; height: 200px; object-fit: cover; padding-top: 20px">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$r->nama_tempat}}</h5>
                        <p class="card-text">{{$r->deskripsi}}</p>
                    </div>
                </a>
            </div>
            @endforeach


        </div>
    </section>
@endsection
