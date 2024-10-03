<?php

namespace App\Livewire\Auth\Passwords;

use App\Livewire\Forms\resetform;
use Livewire\Component;


class Reset extends Component
{

    public resetform $form;

    public function save()
    {
        $this->form->resetPassword();
    }

    public function render()
    {
        return view('livewire.auth.passwords.reset')->layout('components.layouts.auth', ['title' => 'Restablecer contraseña']);
    }
}
