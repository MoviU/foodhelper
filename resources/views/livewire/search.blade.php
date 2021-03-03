<div>
    <form class="form-group">
        <input class="form-control p-2" type="text" placeholder="Search Users" wire:model="searchTerm"/>
    </form>
<br>
<div class="row">
    <div class="col-sm-10 offset-sm-1">
    <ul class="list-group overflow-auto">
        @foreach($users as $user)
            <li class="list-group-item">
                <a href="{{ route('users.edit', $user['id']) }}">
                    <p class="text-left">
                        {{ $user->name }}
                    </p>
                </a>
                <p class="text-left">
                    {{ $user->email }}
                </p>

            </li>

        @endforeach
    </ul>
    </div>
    </div>
</div>
