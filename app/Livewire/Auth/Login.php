<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\loginform;
use Livewire\Component;

class Login extends Component
{
    public loginform $form;

    public function submit()
    {
        $this->form->login();
    }
    
    public function render()
    {
        return view('livewire.auth.login')
            ->layout('components.layouts.auth', ['title' => 'Iniciar sesión']);
    }
}
