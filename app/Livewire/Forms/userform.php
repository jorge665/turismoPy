<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Form;

class userform extends Form
{
    //
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $idioma_preferencia;

    protected function rules() 
    {
        return [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore(Auth::id()),
            ],
            'password' => 'nullable|min:6|confirmed',
        ];
    }

    protected function messages() {
        return [
            'name.required' => 'Por favor ingrese su nombre',
            'email.unique' => 'El email ya está en uso',
            'name.max' => 'El nombre no puede tener más de 255 caracteres',
            'email.required' => 'Por favor ingrese su email',
            'password.min' => 'La contraseña debe tener al menos 6 caracteres',
            'password.confirmed' => 'Las contraseñas no coinciden',
            'idioma_preferencia.required' => 'Por favor seleccione un idioma de preferencia',
        ];
    } 

    public function loadUser()
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->idioma_preferencia = Auth::user()->idioma_preferencia;
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
    }

    public function updateProfile()
    {
        $data = $this->validate();

        $user = Auth::user();
        $user->name = $data['name'];
        $user->email = $data['email'];

        if (!empty($data['password'])) {
            $user->password = Hash::make($data['password']);
        }

        $user->save();

        $this->reset('password', 'password_confirmation');

        return 'Perfil actualizado exitosamente.';
    }
}
