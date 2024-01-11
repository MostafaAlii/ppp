@extends('website.layouts.website')
@section('css')
 <link href="{{ asset('website/resources/css/edits.css') }}" rel="stylesheet" />
@endsection

@section('pageTitle')
    Client Register
@endsection

@section('content')
    <!-- Start Navbar -->
    

<!-- Start Navbar -->
    <div class="container">
        <!-- End Navbar -->
    <!-- End Navbar -->

    <!-- Start Register Form -->
    <div class="container">
 
        <div class="row">
                 <div class="col-lg-6 offset-lg-2 mt-5 text-center"style=" margin-left: 221px;">
                        <form method="post" action="{{ route('register') }}" class="register-form" id="register">
                    @csrf
                    <h1 class="page_title">Create An Account</h1>
                    <div class="form-group row">
                        <div class="col-12 col-sm-12">
                            <input id="name" type="text" class="form-control " name="name" value="" placeholder="Name" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <input id="email" type="email" class="form-control " name="email" value="" placeholder="Email" required>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <div class="col-12 col-sm-12">
                            <input id="website" type="text" class="form-control " name="website" value="" placeholder="Website" required>
                            @error('website')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 col-sm-6">
                            <input id="password" type="password" class="form-control " name="password" placeholder="Password" required>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 col-sm-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="form-check-input custom-control-input" id="terms_agree" type="checkbox" class="" name="terms_agree" required>
                            <label class="form-check-label custom-control-label" for="terms_agree">I agree to <a href="#">terms of service</a></label>
                        </div>
                    </div>
                    {{--<div class="form-group captcha-form-group">
                        <label class='text-center w-100' for="capatcha">Write the numbers below</label>
                        <div class="mb-3 d-flex align-items-center justify-content-center">
                            <img src="https://photorelive.com/storage/captchas/fd9bb48e-6eed-497d-b9ec-05b8e8e90316.png"><div class="captcha">493</div>
                        </div>
                        <input id="capatcha" type="number" class="form-control" placeholder="Confirm Capatcha">
                    </div>--}} 

                    <div class="form-group">
                        <div class="mt-2 text-center col-12">
                           
                            <button type="submit" class="main_btn mx-auto">
                                     <span>Signup</span>
                                   
                                </button>
                        </div>
                    </div>
                    <div class='or-phrase'>or</div>
               
                    
                    
                    
                                              <div class="form-group row">
                            <div class="mt-2 text-center col-12">
                            
                                     
                                     <a href="{{ route('login') }}" class="text-danger" style="
    font-size: 24px;
">Log in</a>
                      
                            </div>
                </form>
                     
         </div>
    </div>
             
        
     
    </div>
    <!-- End Register Form -->
@endsection

@section('js')

@endsection