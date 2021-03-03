@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-10 offset-sm-1 mt-3 mt-sm-5">
                        <livewire:search />
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
