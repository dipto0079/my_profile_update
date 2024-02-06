@extends('backend.layouts.app')
@section('content')
    <div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Comments</th>
                    {{-- <th>Action</th> --}}
                </tr>
                </thead>
                <tbody>
                    @forelse ($inboxs as $inbox)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$inbox->name}}</td>
                        <td>{{$inbox->email}}</td>
                        <td>{{$inbox->phone}}</td>
                        <td>{{$inbox->comments}}</td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No Data Dound</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection