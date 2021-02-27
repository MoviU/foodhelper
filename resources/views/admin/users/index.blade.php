@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">{{ __('Все пользователи') }}</h1>
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
                                <h3 class="card-title">{{ __('Все пользователи') }}</h3>

                                <div class="card-tools">
                                  <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                      <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                  <thead>
                                    <tr>
                                      <th>ID</th>
                                      <th>{{ __('Имя') }}</th>
                                      <th>{{ __('Роль') }}</th>
                                      <th>{{ __('Действия') }}</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      @foreach($users as $user)
                                    <tr>
                                      <td>
                                          {{ $user['id'] }}
                                      </td>
                                      <td>
                                          <a href="">
                                              {{ $user['name'] }}
                                          </a>
                                         <br>
                                          <small>
                                              {{ __('Зарегистрировался') }} {{ $user['created_at'] }}
                                              <br>
                                              {{ __('Обновлено') }} {{ $user['updated_at'] }}
                                          </small>
                                  </td>
                                      <td>
                                            
                                      </td>
                                      <td class="project-actions text-right">
                                          <a class="btn btn-info btn-sm" href="">
                                              <i class="fas fa-eye"></i>
                                            {{ __('Посмотреть') }}
                                          </a>
                                          <a class="btn btn-warning btn-sm" href="">
                                              <i class="fas fa-pencil-alt">
                                              </i>
                                              {{ __('Изменить') }}
                                          </a>

                                          <form action="" method="POST" class="in-bl">
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
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>
                              <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                          </div>
                      </section>
                  </div>
          </div>
      </div>
    </section>
    <!-- /Main Content -->
    </div>

@endsection
