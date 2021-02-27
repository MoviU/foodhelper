@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">{{ __('Категория: ') }} {{ $category['title'] }}</h1>
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
  <h2 class="ml-5">Поки що тут нічого немає</h2>
</div>

@endsection
