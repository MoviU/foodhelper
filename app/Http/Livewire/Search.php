<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $searchTerm;
    private $users;

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $users = User::where('name', 'like', $searchTerm);
        $emails = User::where('email', 'like', $searchTerm);
        $this->users = $users->union($emails)->paginate(5);
        $result = $this->users;
        return view('livewire.search', [
            'users' => $result
        ]);
    }
}

//
