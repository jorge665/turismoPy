<?php

namespace App\Livewire\Forms;

use App\Mail\resetPassword;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;
use Livewire\Form;

class resetform extends Form
{
    //

    #[Validate('required|email|exists:users,email')]
    public $email;

    public $messages = [
        'email.required' => 'Por favor ingrese su correo',
        'email.email' => 'Por favor ingrese un correo válido',
        'email.exists' => 'El correo no se encuentra registrado',
    ];

    public function resetPassword()
    {
        $data = $this->validate();

        $user = User::where('email', $data['email'])->first();

        $tempPassword = rand(100000, 999999);

        $user->password = Hash::make($tempPassword);

        $user->save();

        // Send email with temporary password

        Mail::to($user->email)->send(new resetPassword($tempPassword, $user->name));

        session()->flash('message', 'Se ha enviado un correo con la nueva contraseña temporal');

    }
}
