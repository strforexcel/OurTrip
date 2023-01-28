<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/footers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

  </head>
  <body>
    {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container">
                <a class="navbar-brand text-white" href="/">OurTrip</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="/news">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="/reviews">Reviews</a>
                        </li>
                    </ul>

                    @Auth()
                    <li class="nav-item text-white list-unstyled ms-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                    </li>

                    @else
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="/login" class="nav-link btn ms-3 text-white">Login</a>
                        </li>
                    </ul>
                    @endif
                </div>
            </div>
        </nav>


    {{-- Konten tiap page --}}
    @yield('container')


    {{-- <footer class="bg-light text-center text-lg-start">
      <div class="footer" style="">
        aaa
      </div>
      <!-- Copyright -->

    </footer> --}}

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


  </body>

  <div class="footerWrap">
    <div class="footer">
      <div class = row>
        <div class="footerContent" >
          <h4>Our Trip</h4>
          <p>OurTrip is a website to show and <br>
            accept reviews to travel places <br>
            and trip to help people find their<br>
            wanted destination. You can help us <br>
            by contributing review to places <br>
            or trip you've been to.</p>



        </div>
        <div class="footerContentLinks" >
          <h4>Link</h4>
          <p><a href="/" ; style="text-decoration:none;">Home</a></p>
          <p><a href="/"; style="text-decoration:none;">News</a></p>
          <p><a href="/"; style="text-decoration:none;">Reviews</a></p>
        </div>
        <div class="footerContentLinks" >
          <h4>Follow Us</h4>
          <p><a href="https://www.instagram.com"; style="text-decoration:none;">Instagram</a></p>
          <p><a href="https://www.facebook.com"; style="text-decoration:none;">Facebook</a></p>
          <p><a href="https://www.twitter.com"; style="text-decoration:none;">Twitter</a></p>
        </div>
        <div class="footerContent" >
          <h4>Contact</h4>
          <p>Address: Jl.Apel No.12</p>
          <p>Kelapa Gading, Jakarta Utara</p>
          <p>Phone: 123 456 7890</p>
          <p>Email: our.trip@gmail.com</p>
        </div>
      </div>
    </div>
  </div>

</html>
