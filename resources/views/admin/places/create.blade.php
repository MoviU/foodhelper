@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">{{ __('Добавить заведение') }}</h1>
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
              <form action="{{ route('places.store') }}" method="POST">
                  @csrf
                <div class="card-body">
                    <div class="row">
                      <div class="form-group col-sm-6">
                        <label for="categoryName">{{ __('Название') }}</label>
                        <input type="text" class="form-control" name="title" id="categoryName" placeholder="Введите название заведения" required>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="adress">{{ __('Адресс заведения') }}</label>
                        <input type="text" class="form-control" name="adress" id="adress" placeholder="Введите адрес заведения" required>
                      </div>
                  </div>
                  <div class="form-group">
                        <textarea name="text" rows="15" class="editor"></textarea>
                  </div>
                  <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>Выберите категорию</label>
                    <select name="cat_id" class="form-control" required>
                        @foreach($categories as $category)
                            <option value="{{ $category['id'] }}">{{ $category['title'] }}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                      <label for="feature_image">{{ __('Виберите фотографию для заведения') }}</label>
                      <img src="" alt="" class="img-uploaded bl m-w40 mb-1">
                      <br>
                      <input type="text" id="feature_image" name="img" value="" readonly hidden>
                      <a href="" class="popup_selector btn btn-primary" data-inputid="feature_image">Select Image</a>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">{{ __('Добавить') }}</button>
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
