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
                        src="{{ !empty($user->profile_photo_path) && file_exists(public_path('upload/user_images/' . $user->profile_photo_path)) ? url('upload/user_images/' . $user->profile_photo_path) : url('upload/no_image.jpg') }}"
                        alt="User Avatar" height="100%" width="100%"><br><br>
                    @include('frontend.profile.sidebar_profile')
                </div>
                <div class="col-md-2">
                    
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h3 class="text-center"><span class="text-danger">Hi...</span><strong>{{Auth::user()->name}}</strong> Welcome To Easy Online Shop</h3>
                        <div class="card-body">
                            <form method="POST" action="{{route('user.profile.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" id="name" name="name" class="form-control" value="{{$user->name}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>Email <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="email" id="email" name="email" class="form-control" value="{{$user->email}}">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>Phone <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" id="phone" name="phone" class="form-control" value="{{$user->phone}}">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>File Input Field <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="file" id="profile_photo_path" name="profile_photo_path" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-xs-right">
                                    <button type="submit" class="btn btn-rounded btn-info">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#profile_photo_path').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            });
        });
    </script>
@endsection
