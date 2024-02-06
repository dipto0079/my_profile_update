@extends('backend.layouts.app')
@push('css')
<style>
    .modal-backdrop.show{
        display: none;
    }
    .modal-content{
        margin-top: 100px;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush
@section('content')
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Create New Category</h5>
            <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{route('blog.create')}}" enctype="multipart/form-data">
                @csrf
                <input name="id" type="hidden" @if(!empty($blog->id)) value="{{$blog->id}}" @endif>
                <div class="form-group">
                    <label for="firstname">Title</label>
                    <div>
                        <input type="text" class="form-control" id="title"  name="title" @if(!empty($blog->title)) value="{{$blog->title}}" @endif placeholder="Enter Your Title" />
                        <p class="text text-danger">{{$errors->first('title')}}</p>
                    </div>
                </div>

                <div class="form-group">
                    <label for="firstname">Meta Keywords</label>
                    <div>
                        <input type="text" class="form-control" id="meta_keywords"  name="meta_keywords" @if(!empty($blog->meta_keywords)) value="{{$blog->meta_keywords}}" @endif placeholder="Enter Your Keywords" />
                        <p class="text text-danger">{{$errors->first('meta_keywords')}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstname">Meta Description</label>
                    <div>
                        <input type="text" class="form-control" id="meta_description"  name="meta_description" @if(!empty($blog->meta_description)) value="{{$blog->meta_description}}" @endif placeholder="Enter Your Description" />
                        <p class="text text-danger">{{$errors->first('meta_description')}}</p>
                    </div>
                </div>

                <div class="form-group">
                    <label for="firstname">Image</label>
                    @if(!empty($blog->images))
                        <span>
                            <img src="{{asset('storage/'.$blog->images)}}" width="50px" height="50px" alt="">
                        </span>
                    @endif
                    <br><br>
                    <div>
                        <input type="file" accept=".jpg, .png, image/jpeg, image/png"  class="form-control" id="images" name="images" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="firstname">Description</label>
                    <div>
                        <textarea class="form-control" id="summernote" name="contents">@if(!empty($blog->contents)) {!!$blog->contents!!} @endif</textarea>
                        <p class="text text-danger">{{$errors->first('contents')}}</p>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push("js")
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200
            });
        });
    </script>
@endpush
