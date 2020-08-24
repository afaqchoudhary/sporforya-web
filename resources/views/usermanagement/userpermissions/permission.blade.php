@extends('master')

@section('title', 'User Permission')

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
            <div class="box box-primary">



                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Permission List</h3>


                            </div>
                            <!-- /.box-header -->
                            <form method="POST" action="#"
                                enctype="multipart/form-data">

                                <div class="container-fluid">

                                    <table class="table table-striped">
                                      
                                        <tbody>

                                            <tr>
                                                <td class="text-center">Dashboard</td>
                                                <td><label class="switch">
                                                <input data-id="" class="is-dashboard-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                    data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br>
                                            </label>
                                                <label>View</label>
                                                </td>                                               
                                            </tr>

                                            <tr>
                                                <td class="text-center">Categories</td>
                                                <td ><label class="switch">
                                                <input data-id="" class="is-category-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                    data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>View</label>
                                                </td>
                                                <td ><label class="switch">
                                                <input data-id="" class="can-add-category-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                    data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Add</label>
                                                </td>
                                                <td><label class="switch">
                                                <input data-id="" class="can-edit-category-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                    data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Edit</label>
                                                </td>
                                                <td><label class="switch">
                                                <input data-id="" class="can-delete-category-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                    data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Delete</label>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td class="text-center">Products</td>
                                                <td><label class="switch">
                                                <input data-id="" class="can-view-product-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                    data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>View</label>
                                                </td>
                                                <td><label class="switch">
                                                <input data-id="" class="can-add-product-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                    data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Add</label></td>
                                                <td><label class="switch">
                                                <input data-id="" class="can-edit-product-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                    data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Edit</label></td>

                                            <td><label class="switch">
                                                <input data-id="" class="can-delete-product-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                    data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Delete</label></td>
                                            </tr>
                                            <!--products row-->
                                            <tr>
                                                <td class="text-center">Delivery Zones</td>
                                                <td><label class="switch">
                                                <input data-id="" class="can-view-delivery-zone-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                    data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>View</label>
                                                </td>
                                                <td><label class="switch">
                                                <input data-id="" class="can-add-delivery-zone-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                    data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Add</label></td>
                                                <td><label class="switch">
                                                <input data-id="" class="can-edit-delivery-zone-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                    data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Edit</label></td>

                                            <td><label class="switch">
                                                <input data-id="" class="can-delete-delivery-zone-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Delete</label></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">Coupons</td>
                                                <td><label class="switch">
                                                <input data-id="" class="can-view-coupon-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>View</label>
                                                </td>
                                                <td><label class="switch">
                                                <input data-id="" class="can-add-coupon-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Add</label></td>
                                                <td><label class="switch">
                                                <input data-id="" class="can-edit-coupon-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Edit</label></td>

                                            <td><label class="switch">
                                                <input data-id="" class="can-delete-coupon-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Delete</label></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">Orders</td>
                                                <td><label class="switch">
                                                <input data-id="" class="can-view-order-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>View</label>
                                                </td>
                                                <td><label class="switch">
                                                <input data-id="" class="can-complete-order-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Completed</label></td>
                                                <td><label class="switch">
                                                <input data-id="" class="can-cancel-order-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Cancelled</label></td>
                                                
                                            </tr>
                                            <tr>
                                                <td class="text-center">Settings</td>
                                                <td><label class="switch">
                                                <input data-id="" class="can-view-setting-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>View</label></td>
                                                </td>
                                                
                                                <td><label class="switch">
                                                <input data-id="" class="can-edit-setting-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Edit</label></td>
                                                
                                            </tr>

                                            <tr>
                                                <td class="text-center">User Group</td>
                                                <td><label class="switch">
                                                <input data-id="" class="can-view-user-group-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>View</label></td>
                                                </td>
                                                <td><label class="switch">
                                                <input data-id="" class="can-add-user-group-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Add</label></td>
                                                <td><label class="switch">
                                                <input data-id="" class="can-edit-user-group-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Edit</label></td>
                                                <td><label class="switch">
                                                <input data-id="" class="can-delete-user-group-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Delete</label></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">Users</td>
                                                <td><label class="switch">
                                                <input data-id="" class="can-view-user-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>View</label></td>
                                                </td>

                                                <td><label class="switch">
                                                <input data-id="" class="can-add-user-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Add</label></td>
                                                </td>
                                                
                                                <td><label class="switch">
                                                <input data-id="" class="can-edit-user-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Edit</label></td>

                                            <td><label class="switch">
                                                <input data-id="" class="can-delete-user-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Delete</label></td>
                                                </td>
                                                
                                            </tr>

                                            <tr>
                                                <td class="text-center">Discounts</td>
                                                <td><label class="switch">
                                                <input data-id="" class="can-view-discount-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>View</label></td>
                                                </td>

                                                <td><label class="switch">
                                                <input data-id="" class="can-add-discount-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Add</label></td>
                                                </td>
                                                
                                                <td><label class="switch">
                                                <input data-id="" class="can-edit-discount-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Edit</label></td>

                                            <td><label class="switch">
                                                <input data-id="" class="can-delete-discount-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br> 
                                            </label>
                                            <label>Delete</label></td>
                                                </td>
                                                
                                            </tr>


                                        </tbody>


                                    </table>
                                </div>
                            </form>

                            
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

        <!-- /.row -->
</section>
<!-- /.content -->

@endsection