@extends('backend.layouts.app')
@section('content')
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">{{$user->first_name .' '. $user->last_name}} Update Password</h5>
        <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{route('profile.password.update')}}">
            @csrf
            <div class="form-group">
                <label>Current Password</label>
                <div>
                    <input type="password" class="form-control" name="current_password" placeholder="Enter Current Password" required />
                </div>
            </div>
            <div class="form-group">
                <label>New Password</label>
                <div>
                    <input type="text" class="form-control" name="password" placeholder="Enter New Password" required />
                </div>
            </div>
            <div class="form-group">
                <label>Confirm password</label>
                <div>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirm password" required />
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
