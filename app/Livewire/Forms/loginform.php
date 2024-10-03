<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class loginform extends Form
{
    //
    #[Validate('required|email')]
    public $email = '';

    #[Validate('required|min:6')]
    public $password = '';

    public $remember = false;

    public $messages = [
        'email.required' => 'El campo correo electrónico es obligatorio.',
        'email.email' => 'El campo correo electrónico debe ser una dirección de correo válida.',
        'password.required' => 'El campo contraseña es obligatorio.',
        'password.min' => 'El campo contraseña debe tener al menos 6 caracteres.',
    ];

    public function login()
    {
        $credentials = $this->validate();

        if (Auth::attempt($credentials, $this->remember)) {
            $user = Auth::user();

            if ($user->hasRole('admin')) {
                return redirect()->route('admin.dashboard');
            } elseif ($user->hasRole('collaborator')) {
                return redirect()->route('collaborator.dashboard');
            } else {
                return redirect()->route('home');
            }
        } else {
            $this->addError('notmatch', 'Las credenciales no coinciden con nuestros registros.');
        }
    }
}
