@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Hello,
            @guest
                Stranger
            @else
                {{ Auth::user()->name }}
            @endif
            .
        </h3>
    </div>
@endsection
