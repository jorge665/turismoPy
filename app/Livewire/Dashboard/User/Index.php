<?php

namespace App\Livewire\Dashboard\User;

use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    

    public function mount()
    {
        $this->dispatch('changeTitle', 'Manejo de Usuarios');
    }

    #[Title('Manejo de Usuarios')]
    public function render()
    {
        return view('livewire.dashboard.user.index')
        ->layout('components.layouts.adminDash');
    }
}
