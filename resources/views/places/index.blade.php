@extends('layouts.app')

@section('content')
    <div class="container">
        {{ $places->onEachSide(1)->links() }}
        <div class="row">
            @foreach($places as $place)
                <div class="col-sm-4 col-md-6 mb-3 col-lg-4 mt-4">
                    <div class="card p-auto">
                        <div class="card-header col-12">
                            <p class="text-center">{{ $place->title }}</p>
                        </div>
                        <div class="card-body col-12">
                            @if(!($place->img === null))
                                <img src="/{{ $place->img }}" class="img-fluid img-thumbnail col-sm-auto" alt="">
                            @endif
                            <small>{{ $place->adress }}</small>
                        </div>
                        <div class="card-footer col">
                            <a href="{{ route('place.show', $place['id']) }}" class="btn btn-outline-primary col-10 offset-1">{{ __('Посмотреть') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $places->onEachSide(1)->links() }}
    </div>
@endsection
