@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">{{ __('Редактирование категории:') }} {{ $category['title'] }}</h1>
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
        <!-- /.content-header -->

        <!-- Main Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
              <!-- form start -->
              <form action="{{ route('category.update', $category['id']) }}" method="POST">
                  @csrf
                  @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="categoryName">{{ __('Название') }}</label>
                    <input type="text" value="{{ $category['title'] }}" class="form-control" name="title"id="categoryName" placeholder="Введите название категории" required>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">{{ __('Обновить') }}</button>
                </div>
              </form>
            </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Main Content -->
    </div>
@endsection
