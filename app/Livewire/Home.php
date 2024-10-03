<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

class Home extends Component
{
  
    public function render()
    {
        return view('livewire.home')
            ->layout('components.layouts.guest', ['title' => 'Inicio']);
    }
}
