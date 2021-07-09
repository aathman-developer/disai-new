@extends('layouts.admin.head_foot')
@section('body')
<div class="mx-5 text-center">
    @if(@$editgallery->id==null)
    <h4 class="mt-3">Add Gallery</h4>
    @else
    <h4 class="mt-3">Update Gallery</h4>
    @endif
    <form method="post" action="{{url('admin/post-gallery')}}" enctype="multipart/form-data"
        class="d-flex justify-content-center">
        <!-- @csrf -->
        <input type="hidden" name="id" id="id" value="{{@$editgallery->id}}">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label>Image Upload</label>
                <input type="file" class="form-control" name="galleryimage" id="galleryimage" autocomplete="off"
                    placeholder="Choose the Image">{{@$editgallery->galleryimage}}
            </div>
            <div class="form-group col-md-12">
                <select class="form-control" id="opt" name="category_id" required>
                    <option value="">Select a Category</option>
                    @foreach ($category as $categorys)
                    <option value="{{ $categorys->category_id}}">{{ $categorys->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="justify-content-center">
                <input type="submit" class="btn btn-primary" name="submit" id="submit" value="SUBMIT">
            </div>
        </div>

    </form>
</div>
@stop