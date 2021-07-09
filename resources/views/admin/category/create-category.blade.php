@extends('layouts.admin.head_foot')
@section('body')
<div class="col-12">
<h4>Create Category</h4>
 <form method="post" action="{{url('admin/post-category')}}" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Add Category</label>
                                <input type="text" class="form-control" name="name" id="name" autocomplete="off"
                                    placeholder="Add the Category">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" id="submit" value="SUBMIT">
                    </form>
                    </div>
@stop