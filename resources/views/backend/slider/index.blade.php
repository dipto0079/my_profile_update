@extends('backend.layouts.app')
@section('content')
    <div class="main-card mb-3 card">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-actions">
                    <a class="btn btn-lg btn-transition btn btn-outline-success" href="{{route('slider.create')}}">
                        Create
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
               @forelse ($sliders as $slider)
                   <tr>
                       <td>{{$loop->iteration}}</td>
                       <td>{{$slider->title}}</td>
                       <td>{{$slider->subtitle}}</td>
                       <td>
                        <img src="{{asset('storage/'.$slider->image)}}" alt="" width="100px" height="100px">
                       </td>
                       <td>
                           @if($slider->status)
                                <a class="btn btn-sm btn-outline-success" href="{{route('slider.status',$slider->id)}}">Active</a>
                            @else
                                <a class="btn btn-sm btn-outline-danger" href="{{route('slider.status',$slider->id)}}">InActive</a>
                           @endif
                       </td>
                       <td>
                           @can('slider-edit')
                               <a class="mb-2 mr-2 btn-transition btn btn-outline-success" href="{{route('slider.edit',$slider->id)}}">Edit</a>
                           @endcan
                           @can('slider-delete')
                               <a class="delete-row mb-2 mr-2 btn-transition btn btn-outline-danger" href="{{route('slider.destroy',$slider->id)}}">Delete</a>
                            @endcan
                       </td>
                   </tr>
               @empty
                   <tr>
                       <td colspan="6" class="text-center">No Data Dound</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
