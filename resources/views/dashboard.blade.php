@extends('frontend.main_master')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>Login</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div>
    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img class="card-img-top" style="border-radius:50%" id="showImage"
                        src="{{ !empty(Auth::user()->profile_photo_path) && file_exists(public_path('upload/user_images/' . Auth::user()->profile_photo_path)) ? url('upload/user_images/' . Auth::user()->profile_photo_path) : url('upload/no_image.jpg') }}"
                        alt="User Avatar" height="100%" width="100%"><br><br>
                    @include('frontend.profile.sidebar_profile')
                </div>
                <div class="col-md-2">
                    
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h3 class="text-center"><span class="text-danger">Hi...</span><strong>{{Auth::user()->name}}</strong> Welcome To Easy Online Shop</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
