@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-sm-none">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12">
                            {{ $place['title'] }}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider photo-slider">
                                <div><img src="/{{ $place['img'] }}" class="m-auto img-fluid" alt="{{ $place['title'] }} photo"></div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="text-center"><small>{{ $place['adress'] }}</small></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 offset-1">
                            <div class="card p-1">
                                {!! $place['text'] !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-md-block">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-12">
                        <p class="fw-bolder">{{ $place['title'] }}</p>
                        <small>{{ __('Категории') }}:
                            @foreach($place->categories as $category)
                                {{ $category['title'] }}
                            @endforeach
                        </small>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">

                        <div class="row">
                            <div class="col-6">
                                <div class="slider photo-slider m-3">
                                    <div><img src="/{{ $place['img'] }}" class="m-auto img-fluid" alt="{{ $place['title'] }} photo"></div>
                                    <div>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                                <p class="text-center"><small>{{ $place['adress'] }}</small></p>
                            </div>
                                <div class="col-6 d-inline card overflow-auto">
                                    {!! $place['text'] !!} Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                        </div>
                        <div class="row">

                        </div>

                    <div class="col d-sm-none ">
                        <div class="slider photo-slider">
                            <div><img src="/{{ $place['img'] }}" class="m-auto img-fluid" alt="{{ $place['title'] }} photo"></div>
                            <div>
                                asdasdasd
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
