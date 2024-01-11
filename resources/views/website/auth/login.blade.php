@extends('website.layouts.website')
@section('css')
 <link href="{{ asset('website/resources/css/edits.css') }}" rel="stylesheet" />
@endsection

@section('pageTitle')
    Client Login
@endsection

@section('content')
      
    <!-- Start Navbar -->
    <div class="container">
       
        <!-- End Navbar -->

        <!-- Start Login Form -->
        <div class="container pt-0 mt-0">
          
              <div class="row">
                 <div class="col-lg-6 offset-lg-2 mt-5 text-center"style=" margin-left: 221px;">
                     <form method="post" action="{{ route('login') }}" class="register-form">
                        @csrf
                        <h1 class="page_title">Log in</h1>
                        <div class="form-group row">
                            <input id="email" type="email" class="form-control " name="email" value="" placeholder="Email" required>
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <input id="password" type="password" class="form-control " name="password" placeholder="Password" required>
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <div class="col-12 d-flex justify-content-between nop">
                                <div class="form-check form-check-custom nop">
                                    <div class="custom-control custom-checkbox">
                                        <input class="form-check-input custom-control-input" type="checkbox" name="remember" id="remember" >
                                        <label class="form-check-label custom-control-label" for="remember">Remember Me</label>
                                    </div>
                                </div>
                                <a href="#" rel="nofollow">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="mt-2 text-center col-12">
                                <button type="submit" class="main_btn mx-auto">
                                    <span>Login</span>
                                   
                                </button>
                            </div>
                        </div>
                        <div class='or-phrase'>or</div>
                      
                        
                          <div class="form-group row">
                            <div class="mt-2 text-center col-12">
                            
                                     
                                     <a href="{{ route('register') }}" class="text-danger" style="
    font-size: 24px;
">Signup Now</a>
                      
                            </div>
                        </div>
                    </form>
                  </div>
              </div>
        </div>
    </div>

    <!-- End Login Form -->
@endsection

@section('js')

@endsection
