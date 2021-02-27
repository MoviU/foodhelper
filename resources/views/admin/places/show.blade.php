@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">{{ __('Заведение: ') }} {{ $place['title'] }}</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
      @if(session('Success'))
          <div class="alert alert-success col-lg-6 offset-lg-3" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
              <h4><i class="icon fa fa-check"></i>{{ session('Success') }}</h4>
          </div>
      @endif
    </div><!-- /.container-fluid -->
  </div>
  <section class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                      <div class="col-12">
                              <div class="card">
                                  <div class="card-header">
                                       {{ $place['title'] }}
                                  </div>
                                  <div class="card-body">
                                      <div class="row">
                                          <div class="col-12">
                                          <div class="col-sm-6">
                                          {!! $place['text'] !!}
                                          </div>
                                          <div class="col-sm-6 offset-sm-6">
                                              <img class="m-w40" src="/{{ $place['img'] }}" alt="{{ $place['img'] }}">
                                              <br>
                                              {{ __('Адресс') }} {{ $place['adress'] }}
                                        </div>
                                        </div>
                                      </div>
                                      <hr>
                                      <small>
                                          {{ __('Создано') }} {{ $place['created_at'] }}
                                          <br>
                                          {{ __('Обновлено') }} {{ $place['updated_at'] }}
                                      </small>
                                  </div>
                                  <div class="card-footer">
                                      <div class="text-right">
                                      <a class="btn btn-warning btn-sm" href="{{ route('places.edit', $place['id']) }}">
                                          <i class="fas fa-pencil-alt">
                                          </i>
                                          {{ __('Изменить') }}
                                      </a>
                                      <form action="{{ route('places.destroy', $place['id']) }}" method="POST" class="in-bl">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                              <i class="fas fa-trash">
                                              </i>
                                              {{ __('Удалить') }}
                                          </button>
                                      </form>
                                      </div>
                                  </div>
                              </div>
                      </div>
              </div>
          </div>
      </div>
     </section>
</div>
@endsection
