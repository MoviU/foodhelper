@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">{{ __('Все заведения') }}</h1>
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

                            <section class="content">

                                  <!-- Default box -->
                                  <div class="card">
                                    <div class="card-body p-0">
                                      <table class="table table-striped projects">
                                          <thead>
                                              <tr>
                                                  <th style="width: 1%">
                                                      ID
                                                  </th>
                                                  <th style="width: 7%">
                                                      {{ __('Название') }}
                                                  </th>
                                                  <th style="width: 30%">
                                                      {{ __('Категория') }}
                                                  </th>
                                                  <th style="width: 15%">
                                                      {{ __('Действия') }}
                                                  </th>
                                              </tr>
                                          </thead>
                                          @foreach($places as $place)
                                            <tbody>
                                              <tr>
                                                  <td>
                                                      {{ $place['id'] }}
                                                  </td>
                                                  <td>
                                                      <a>
                                                          {{ $place['title'] }}
                                                      </a>
                                                      <br>
                                                      <small>
                                                          {{ __('Создано') }} {{ $place['created_at'] }}
                                                      </small>
                                                  </td>
                                                  <td>
                                                        {{ $place->category['title'] }}
                                                  </td>
                                                  <td class="project-actions text-right">
                                                      <a class="btn btn-info btn-sm" href="{{ route('places.show', $place['id']) }}">
                                                        Посмотреть
                                                      </a>
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
                                                  </td>
                                              </tr>
                                              </tbody>
                                             @endforeach
                                      </table>
                                    </div>
                                    <!-- /.card-body -->
                                  </div>
                                  <!-- /.card -->

                                </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Main Content -->
    </div>
@endsection
