@extends('backend.layouts.app')
@section('content')
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Create New Slider</h5>
            <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{route('slider.store')}}" enctype="multipart/form-data">
                @csrf
                <input name="id" type="hidden" @if(!empty($slider->id)) value="{{$slider->id}}" @endif>
                <div class="form-group">
                    <label for="firstname">Title</label>
                    <div>
                        <input type="text" class="form-control" id="title"  name="title" @if(!empty($slider->title)) value="{{$slider->title}}" @endif placeholder="Enter Your Title" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstname">Sub Title</label>
                    <div>
                        <input type="text" class="form-control" id="title"  name="subtitle" @if(!empty($slider->subtitle)) value="{{$slider->subtitle}}" @endif placeholder="Enter Your Sub Title" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="firstname">Image</label> <br>
                    @if(!empty($slider->image))
                        <span>
                            <img src="{{asset('storage/'.$slider->image)}}" width="50px" height="50px" alt="">
                        </span>
                    @endif
                    <br> <br>
                    <div>
                        <input type="file" accept=".jpg, .png, image/jpeg, image/png"  class="form-control" name="image" />
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
