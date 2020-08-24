@extends('master')

@section('title', 'User Permission | Index')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    User Permission
        <small>Preview</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            


            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">User Permission List</h3>

                            
                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">No.Of Users</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        
                                        
                                        <td class="text-center">
                                            <a href="" class="btn btn-primary">
                                                <i class="fa fa-lock">
                                                </i>
                                            </a>
                                            <a class="btn btn-primary" href="">
                                                <i class="fa fa-users" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                       

                                    </tr>


                                </tbody>
                            </table>




                        </div>
                        <!-- /.box-body -->

                    </div>
                    <!-- /.box -->
                </div>
            </div>



        </div>
        <!--/.col (left) -->
        <!-- right column -->

        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->


@endsection