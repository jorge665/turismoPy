<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\registerform;
use Livewire\Component;

class Register extends Component
{
    public registerform $form;


    public function register()
    {
        $this->form->save();
    }
    public function render()
    {
        return view('livewire.auth.register')->layout('components.layouts.auth', ['title' => 'Registro']);
    }
}
