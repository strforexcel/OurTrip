@extends('layouts.master')
@section('title','login')
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
                        <form method="POST" action="/login">
                            @csrf
                            <header>OurTrip</header>
                            <p>Welcome Back, please login to your account</p>

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
                                    <input id="check_1" name="check_1" type="checkbox" required><small>Remember Me</small></input>
                                    <div class="invalid-feedback">You must check the box.</div>
                                </label>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="butt">Login</button>
                                </div>

                                <div class="col-md-6">
                                    <button class="butt" onclick="window.location.href='/register'">
                                        Sign Up
                                    </button>
                                </div>
                            </div>
                            <br>

                            {{-- <button class="btn btn-primary" onclick="window.location.href='auth/google'">
                                Login With Google
                            </button> --}}
                            <div class="google-btn" onclick="window.location.href='auth/google'">
                                <div class="google-icon-wrapper">
                                  <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"/>
                                </div>
                                <p class="btn-text">Sign in with google</p>
                            </div>


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
