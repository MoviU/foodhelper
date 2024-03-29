<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Actions\Fortify\UpdateUserProfileInformation;

class ProfileForm extends Component
{
    public $state = [];

    public function render()
    {
        return view('livewire.profile-form');
    }

    public function mount()
    {
        $this->state = auth()->user()->withoutRelations()->toArray();
    }

    public function updateProfileInformation(UpdateUserProfileInformation $updater)
    {
        $this->resetErrorBag();

        $updater->update(auth()->user(), $this->state);

        session()->flash('status', 'Profile successfully updated');
    }
}
