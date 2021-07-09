@extends('layouts.admin.head_foot')
@section('body')
<div class="mx-5">
    <div class="d-flex my-3 col-12">
        <div class="align-items-center d-flex mr-auto ">
            <h5 class="m-0">View Gallery List</h5>
        </div>
        <div class="align-items-center d-flex">
            <a href="{{url('admin/create-gallery')}}"><button type="button" class="btn btn-info"
                    name="add">Add</button></a>
        </div>
    </div>
    @if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif
    @if(Session::has('danger'))
    <p class="alert alert-danger">{{ Session::get('danger') }}</p>
    @endif
    @if(Session::has('primary'))
    <p class="alert alert-primary">{{ Session::get('primary') }}</p>
    @endif
    <div class="container">
        <table id="user_listing" class="display border table-striped" id="example">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Action</th>                
                </tr>
            </thead>
            <tbody>
                @foreach ($allgallery as $gallerys)
                <tr>
                    <td><img src="{{$gallerys->galleryimage}}" width="50"></td>                      
                   <td><p>{{$gallerys->scheme_name['name']}}</p></td>                                
                    <td><a href="editgallery/{{$gallerys->id}}"><button class="btn btn-primary" id="edit"
                                type="button">Edit</button></a>&nbsp;
                        <a href="deletegallery/{{$gallerys->id}}"><button class="btn btn-danger" id="edit"
                                type="button">Delete</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop