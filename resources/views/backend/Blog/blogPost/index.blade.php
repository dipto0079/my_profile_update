@extends('backend.layouts.app')
@section('content')
    <div class="main-card mb-3 card">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-actions">
                    <a class="btn btn-lg btn-transition btn btn-outline-success" href="{{route("blog-create")}}">
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
                    <th>See First</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($blogs as $blog)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$blog->title}}</td>

                        <td>

                            @if($blog->see_first)
                                <a class="btn btn-sm btn-outline-success" href="{{route('blog.see-first',$blog->id)}}">Yes</a>
                            @else
                                <a class="btn btn-sm btn-outline-danger"
                                   href="{{route('blog.see-first',$blog->id)}}">No</a>
                            @endif

                        </td>
                        <td>

                            <div class="dropdown d-inline-block">
                                @if($blog->status==0)
                                    <button type="button" aria-haspopup="true" aria-expanded="false"
                                            data-toggle="dropdown"
                                            class="mb-2 dropdown-toggle btn-sm btn-outline-secondary">Pending
                                    </button>
                                @elseif($blog->status == 1)
                                    <button type="button" aria-haspopup="true" aria-expanded="false"
                                            data-toggle="dropdown"
                                            class="mb-2 dropdown-toggle btn-sm btn-outline-info">Active
                                    </button>
                                @else
                                    <button type="button" aria-haspopup="true" aria-expanded="false"
                                            data-toggle="dropdown"
                                            class="mb-2 dropdown-toggle btn-sm btn-outline-success">Published
                                    </button>
                                    @endif
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                         class="dropdown-menu-rounded dropdown-menu-md dropdown-menu">
                                        <a class="btn btn-sm btn-outline-secondary"
                                           href="{{route('blog.status',['id' => $blog->id, 'status' => 0])}}">Pending</a><br>
                                        <a class="btn btn-sm btn-outline-info"
                                           href="{{route('blog.status',['id' => $blog->id, 'status' => 1])}}">Active</a>
                                        <br>
                                        <a class="btn btn-sm btn-outline-success"
                                           href="{{route('blog.status',['id' => $blog->id, 'status' => 2])}}">Published</a>
                                    </div>
                            </div>

                        </td>
                        <td>

                            <a class="mb-2 mr-2 btn-transition btn btn-outline-success"
                               href="{{route('blog.edit',$blog->slug)}}">Edit</a>

                            <a class=" mb-2 mr-2 btn-transition btn btn-outline-danger" href="{{route('blog.del',$blog->id)}}">Delete</a>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">No Data Dound</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
