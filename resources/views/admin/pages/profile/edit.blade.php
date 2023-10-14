@extends('admin.layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-12">

            <h2 class="py-4">{{ __('Profile') }}</h2>


            <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    @include('admin.pages.profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    @include('admin.pages.profile.partials.update-password-form')
                </div>
            </div>

            <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    @include('admin.pages.profile.partials.delete-user-form')
                </div>
            </div>


        </div>
    </div>
@endsection

