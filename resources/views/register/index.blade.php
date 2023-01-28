@extends('layouts.master')
@section('title','Register')
@section('container')
<style>
    div.footerWrap {
   width:100%;
   margin-top: 15%;

   /* position:fixed; */
   padding-top: 25%;
   bottom: 0%;
}
</style>
<div class="footerWrap">
    <div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    <div class="myLeftCtn">
                        <form method="POST" action="/register">
                            @csrf
                            <header>OurTrip</header>
                            <p>Welcome to OurTrip family, Sign Up to join us</p>

                            <div class="form-group has-validation">
                                <label class="col-lg-3 control-label">Username</label>
                                <div class="col-lg-12">
                                  <input class="form-control @error('username') is-invalid @enderror" type="text" name="username">
                                  @error('username')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                                  @enderror
                                </div>
                              </div>


                            <div class="form-group has-validation">
                                <label class="col-lg-3 control-label">Email</label>
                                <div class="col-lg-12">
                                  <input class="form-control @error('email') is-invalid @enderror" type="text" value="" name="email">
                                  @error('email')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                                  @enderror
                                </div>
                            </div>

                            <div class="form-group has-validation">
                                <label class="col-lg-3 control-label">Password</label>
                                <div class="col-lg-12">
                                  <input class="form-control @error('password') is-invalid @enderror" type="password" value="" name="password">
                                  @error('password')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                                  @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label>
                                    <input id="check_1" name="check_1" type="checkbox" required><small> I read and agree to Terms & Conditions</small></input>
                                    <div class="invalid-feedback">You must check the box.</div>
                                </label>
                            </div>
                            <button type="submit" class="butt">Register</button>

                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://source.unsplash.com/480x600/?beach"style="width:100%;height:100%;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
