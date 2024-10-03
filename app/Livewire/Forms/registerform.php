<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Form;

class registerform extends Form
{
    //

    #[Validate('required|min:6')]
    public $name;

    #[Validate('required|email|unique:users,email')]
    public $email;

    #[Validate('required|min:6')]
    public $password;

    #[Validate('required|min:6|same:password')]
    public $password_confirmation;

    #[Validate('required')]
    public $idioma_preferencia;

    public $messages = [
        'name.required' => 'Por favor ingrese su nombre',
        'email.unique' => 'El email ya está en uso',
        'name.min' => 'El nombre debe tener al menos 6 caracteres',
        'email.required' => 'Por favor ingrese su email',
        'password.required' => 'Por favor ingrese su contraseña',
        'password.min' => 'La contraseña debe tener al menos 6 caracteres',
        'password_confirmation.required' => 'Por favor confirme su contraseña',
        'password_confirmation.min' => 'La confirmación de la contraseña debe tener al menos 6 caracteres',
        'password_confirmation.same' => 'Las contraseñas no coinciden',
        'idioma_preferencia.required' => 'Por favor seleccione un idioma de preferencia',
    ];

    public function save()
    {
        $data = $this->validate();

        try {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'idioma_preferencia' => $data['idioma_preferencia'],
                'rol' => 2,
            ]);

            $user->assignRole('user');
    
            Auth::login($user);
    
            return redirect()->route('home');
        } catch (\Throwable $th) {
            $this->addError('error', 'Ha ocurrido un error, por favor intente de nuevo');
        }

    }
}
