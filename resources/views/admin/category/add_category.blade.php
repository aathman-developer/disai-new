@extends('layouts.admin.head_foot')
@section('body')
<div class="mx-5">
    <h4 class="mt-3">Category</h4>
    <div class="justify-content-end d-flex">
        <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add">Add</button> -->
          <a href="{{url('admin/create-category')}}"><button type="button" class="btn btn-info"
                    name="add">Add</button></a>
    </div>
    <div class="row mx-5">
        <div class="col l12 s12 m12">
            <div class="col l12 s12 m12">
                <div class="panel panel-default panel-custom">

                    <table id="user_listing" class="display view_msme_table res_table">
                        <thead>
                            <tr>
                                <th>Sno</th>
                                <th>Category Name</th>
                                <th>Date</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
            $i=1;
            foreach ($category as $categorys)
            {
              ?>
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>
                                    <p class="m-0">{{ $categorys->name }}</p>
                                </td>
                                <td>{{ $categorys->created_at }}</td>                              
                            </tr>
                            <?php
            }
            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center p-md-5">
                    <form method="post" action="{{url('admin/add_category')}}" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Add Category</label>
                                <input type="text" class="form-control" name="name" id="name" autocomplete="off"
                                    placeholder="Add the Category">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" id="submit" value="SUBMIT">
                    </form>
                    <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div> -->
</div>
@stop