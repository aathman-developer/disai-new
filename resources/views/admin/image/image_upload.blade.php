@extends('layouts.admin.head_foot')
@section('body')

@if(@$editgallery->id==null)     
<h4 class="mt-3">Add Gallery</h4>
@else
<h4 class="mt-3">Update Gallery</h4>
@endif
<form method="post" action="{{url('admin/post-gallery')}}" enctype="multipart/form-data"> 
@csrf
  <input type = "hidden" name = "id"  id="id" value="{{@$editgallery->id}}">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Image Upload</label>
      <input type="file" class="form-control" name="galleryimage" id="galleryimage"  autocomplete="off" placeholder="Choose the Image">{{@$editgallery->galleryimage}}
    </div>
  </div>
  <input type="submit" class="btn btn-primary" name="submit" id="submit" value="SUBMIT">
</form>
@stop