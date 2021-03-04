<div>
    <form class="form-group">
        <input class="form-control p-2" type="text" placeholder="Search Users" wire:model="searchTerm"/>
    </form>
    <br>
    <div class="row">
        <div class="col-sm-10 offset-sm-1">
            <div class="list-group">
                {{ $users->onEachSide(1)->links() }}
                @foreach($users as $user)
                    <a class="list-group-item list-group-item-action" href="{{ route('users.edit', $user['id']) }}">
                        <p class="text-left">
                            {{ $user->name }}
                        </p>
                        <p class="text-left">
                            {{ $user->email }}
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
