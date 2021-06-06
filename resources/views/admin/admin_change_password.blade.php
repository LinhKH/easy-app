@extends('admin.admin_master')
@section('admin')

<div class="container-full">
    <section class="content">

        <!-- Basic Forms -->
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Admin Change Password</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">
                        <form novalidate="" method="POST" action="{{route('update.change.password')}}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5>Current Password <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="password" id="current_password" name="current_password" class="form-control" required="" >
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5>New Password <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="password" id="password" name="password" class="form-control" required="" >
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5>Confirm Password <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required="" >
                                                    <div class="help-block"></div>
                                                </div>
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
@endsection