<div class="row">
    <div class="col-12">
        <form class="d-flex" wire:model="searchTerm">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          </form>

        <div class="up">
            <div class="list-group">
                @if(!($searchTerm == ''))
                    @foreach($places as $place)
                    <a href="{{ route('place.show', $place['id']) }}" class="list-group-item list-group-item-action">
                        {{ $place['title'] }}
                        <br>
                        <small>{{ $place['adress'] }}</small>
                    </a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
