<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Place;

class PlacesSearch extends Component
{
    public $searchTerm;
    public $places;

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $this->places = Place::where('title', 'like', $searchTerm)->get();

        return view('livewire.places-search');
    }
}
