@extends('master')

@section('title', 'System Settings')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    System Settings
        <small>Preview</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Data</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="#" enctype="multipart/form-data">
                    <div class="box-body">
                        @csrf
                        @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label>Site Name</label>
                                    <input type="text" class="form-control" name="site_name"
                                        value="{{ old('site_name') }}" placeholder="enter site name">
                                    @if ($errors->has('site_name'))
                                    <div class="danger">{{ $errors->first('site_name') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label>Site Header Logo</label>
                                    <input type="file" class="form-control" name="header_logo">
                                    @if ($errors->has('header_logo'))
                                    <div class="danger">{{ $errors->first('header_logo') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label>Site Footer Logo</label>
                                    <input type="file" class="form-control" name="footer_logo">
                                    @if ($errors->has('footer_logo'))
                                    <div class="danger">{{ $errors->first('footer_logo') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label>Site Favicons</label>
                                    <input type="file" class="form-control" name="favicon_image">
                                    @if ($errors->has('favicon_image'))
                                    <div class="danger">{{ $errors->first('favicon_image') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label>Back to website link</label>
                                    <input type="text" class="form-control" name="web_link" value="{{ old('web_link') }}"
                                        placeholder="enter web link">
                                    @if ($errors->has('web_link'))
                                    <div class="danger">{{ $errors->first('web_link') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label>Facebook Link</label>
                                    <input type="text" class="form-control" name="facebook_link"
                                        value="{{ old('facebook_link') }}" placeholder="enter facebook link">
                                    @if ($errors->has('facebook_link'))
                                    <div class="danger">{{ $errors->first('facebook_link') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label>Instagram Link</label>
                                    <input type="text" class="form-control" name="instagram_link"
                                        value="{{ old('instagram_link') }}" placeholder="enter instagram link">
                                    @if ($errors->has('instagram_link'))
                                    <div class="danger">{{ $errors->first('instagram_link') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label>LinkedIn Link</label>
                                    <input type="text" class="form-control" name="linkedin_link"
                                        value="{{ old('linkedin_link') }}" placeholder="enter linkedin link">
                                    @if ($errors->has('linkedin_link'))
                                    <div class="danger">{{ $errors->first('linkedin_link') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label>Google Plus Link</label>
                                    <input type="text" class="form-control" name="google_plus_link"
                                        value="{{ old('google_plus_link') }}" placeholder="enter google plus link">
                                    @if ($errors->has('google_plus_link'))
                                    <div class="danger">{{ $errors->first('google_plus_link') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Display Product Image
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">  
                        <label>Footer Color</label>                                  
                            <input class="jscolor form-control" step="0.01" name="footer_color" value="404851" autocomplete="off" style="background-image: none; background-color: rgb(64, 72, 81); color: rgb(255, 255, 255);">
                        </div>
                    </div>
                        </div>

                        <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">  
                        <label>Header Color</label>                                  
                            <input class="jscolor form-control" step="0.01" name="footer_color" value="404851" autocomplete="off" style="background-image: none; background-color: rgb(64, 72, 81); color: rgb(255, 255, 255);">
                        </div>
                    </div>
                        </div>

                        <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">  
                        <label>Theme Variant Color</label>                                  
                            <input class="jscolor form-control" step="0.01" name="footer_color" value="404851" autocomplete="off" style="background-image: none; background-color: rgb(64, 72, 81); color: rgb(255, 255, 255);">
                        </div>
                    </div>
                        </div>

                        <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">  
                        <label>Theme Primary Color</label>                                  
                            <input class="jscolor form-control" step="0.01" name="footer_color" value="404851" autocomplete="off" style="background-image: none; background-color: rgb(64, 72, 81); color: rgb(255, 255, 255);">
                        </div>
                    </div>
                        </div>

                        <div class="modal fade" id="modal-default">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Update Settings</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Do you want to save the changes?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->


                        <div class="box-footer text-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modal-default">
                                Update Settings
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->

        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->


@endsection