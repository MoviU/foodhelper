<section class="my-5">
    @if (session()->has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ __('Update Profile Information') }}</h5>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif



            <form wire:submit.prevent="updateProfileInformation" role="form">

                    <div class="form-group">
                        <label for="state.email">{{ __('Name') }}</label>
                        <input type="text" class="form-control" id="state.name" wire:model="state.name"/>
                    </div>

                    <div class="form-group">
                        <label for="state.email">{{ __('Email Address') }}</label>
                        <input type="email" class="form-control" id="state.email"  wire:model="state.email"/>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">{{ __('Update Info') }}</button>
                    </div>
            </form>
            <div class="form-group">
                <form class="" action="{{ route('avatarUpload', Auth::user()->id) }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <label for="img">{{ __('Profile photo (optional)') }}</label>
                    <input type="file" name="img" class="form-control" id="img">
                    <input type="submit" class="btn btn-default" value="Отправить">
                </form>
            </div>
        </div>
    </div>
</section>
