@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <livewire:profile-form />
            </div>
            <div class="col-sm-6">
                <livewire:password-change-form/>
            </div>
        </div>
    </div>
@endsection
