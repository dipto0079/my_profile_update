@extends('backend.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tabs-animation">
                <div class="card mb-3">
                    <div class="card-header-tab card-header d-flex justify-content-center">
                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">Settings
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="smartwizard3" class="forms-wizard-vertical">
                            <ul class="forms-wizard">
                                <li>
                                    <a href="#generalSettings">
                                        <span>General Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#appearanceSettings">
                                        <span>Appearance Settings</span>
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="#mailSettings">
                                        <span>Mail Settings</span>
                                    </a>
                                </li> --}}
                                <li>
                                    <a href="#socialSettings">
                                        <span>Social Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#contactSettings">
                                        <span>Contact Settings</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="form-wizard-content">
                                <div id="generalSettings">
                                    <div class="card-body">
                                        <form id="signupForm" class="mx-auto" method="post" action="{{route('general.settings.update')}}">
                                            @csrf
                                            @include("backend.setting._general", ["button" => "Update"])
                                        </form>
                                    </div>
                                </div>
                                <div id="appearanceSettings">
                                    <div class="card-body">
                                        <form id="signupForm" class="mx-auto" method="post" action="{{route('appearance.settings.update')}}" enctype="multipart/form-data">
                                            @csrf
                                            @include("backend.setting._appearance", ["button" => "Update"])
                                        </form>
                                    </div>
                                </div>
                                <div id="mailSettings">
                                    <div class="card-body">
                                        {{-- <form id="signupForm" class="mx-auto" method="post" action="{{route('mail.settings.update')}}">
                                            @csrf
                                            @include("backend.settings._mail", ["button" => "Update"])
                                        </form> --}}
                                    </div>
                                </div>
                                <div id="socialSettings">
                                    <div class="card-body">
                                        <form id="signupForm" class="mx-auto" method="post" action="{{route('social.settings.update')}}">
                                            @csrf
                                            @include("backend.setting._social", ["button" => "Update"])
                                        </form>
                                    </div>
                                </div>
                                <div id="contactSettings">
                                    <div class="card-body">
                                        <form id="signupForm" class="mx-auto" method="post" action="{{route('contact.settings.update')}}">
                                            @csrf
                                            @include("backend.setting._contact", ["button" => "Update"])
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                            <button type="button" id="next-btn22" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">Next</button>
                            <button type="button" id="prev-btn22" class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary">Previous</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection