@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container-full">
    <section class="content">

        <!-- Basic Forms -->
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Admin Profile Edit</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">
                        <form novalidate="" method="POST" action="{{route('admin.profile.store')}}" enctype='multipart/form-data'>
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5>Admin User Name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name" class="form-control" required="" value="{{$editData->name}}">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h5>Admin Email <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="email" name="email" class="form-control" required="" value="{{$editData->email}}">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5>File Input Field <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" id="image" name="profile_photo_path" class="form-control" required="">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <img class="rounded-circle" style="width: 100px; height:100px;" id="showImage"
                                                    src="{{ !empty($editData->profile_photo_path) && file_exists(public_path('upload/admin_images/' . $editData->profile_photo_path)) ? url('upload/admin_images/' . $editData->profile_photo_path) : url('upload/no_image.jpg') }}"
                                                    alt="User Avatar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-info">Update</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    });
</script>
@endsection