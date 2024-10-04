<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Forms\userform;
use Livewire\Attributes\Title;
use Livewire\Component;

class Profile extends Component
{
    public userform $form;
    public $successMessage;

    public function mount()
    {
        $this->dispatch('changeTitle', 'Profile');
        $this->form->loadUser();
    }

    public function save()
    {
        $this->successMessage = $this->form->updateProfile();
    }

    #[Title('Profile')]
    public function render()
    {
        return view('livewire.dashboard.profile')
            ->layout('components.layouts.adminDash');
    }
}
