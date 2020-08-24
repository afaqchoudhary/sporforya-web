@extends('master')

@section('title', 'Group | Add Group')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Add New Group
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
                                    <label>Group Name</label>
                                    <input type="text" class="form-control" name="group_name"
                                        value="{{ old('group_name') }}" placeholder="enter group name">
                                    @if ($errors->has('group_name'))
                                    <div class="danger">{{ $errors->first('group_name') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        
                        <div class="modal fade" id="modal-default">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Add Group</h4>
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
                                Add Group
                            </button>
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