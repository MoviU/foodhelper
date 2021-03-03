@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
        <div class="container-fluid">
            @if(session('Success'))
                <div class="alert alert-success col-lg-6 offset-lg-3" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('Success') }}</h4>
                </div>
            @endif
        </div>
  </div>
  <section class="content">
      <div class="container-fluid">
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <div class="card p-3">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="text-center">{{ $this_user->name }}</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="h5">{{ $this_user->email }}</p>
                                    <p class="h6">
                                        Роли:
                                        @foreach($user_role as $role)
                                            {{ $role['name'] }}
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mt-4">
                                    <h5>{{ __('Установить роль:') }}</h5>
                                    <div class="col-sm-12">
                                        <form action="{{ route('users.update', $this_user->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                        <div class="input-group">
                                          <select class="custom-select" name="role" id="inputGroupSelect04">
                                            @foreach($roles as $role)
                                                <option @foreach($user_role as $user) @if($user['name'] == $role['name']) selected @endif @endforeach>{{ $role['name'] }}</option>
                                            @endforeach
                                          </select>
                                          <div class="input-group-append">
                                            <button class="btn btn-outline-warning" type="submit">{{ __('Изменить') }}</button>
                                          </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-4">
                                    <h5>{{ __('Удалить роль:') }}</h5>
                                    <div class="col-sm-12">
                                        <form action="{{ route('users.destroy', $this_user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <div class="input-group">
                                          <select class="custom-select" name="role" id="inputGroupSelect04">
                                            @foreach($roles as $role)
                                                <option @foreach($user_role as $user) @if($user['name'] == $role['name']) selected @endif @endforeach>{{ $role['name'] }}</option>
                                            @endforeach
                                          </select>
                                          <div class="input-group-append">
                                            <button class="btn btn-outline-danger" type="submit">{{ __('Удалить') }}</button>
                                          </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>

@endsection
