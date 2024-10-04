<?php

namespace App\Livewire\Dashboard\User;

use App\Models\Rol;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Show extends Component
{
    public $selectedUser;
    public $selectedRole;
    public $successMessage = '';
    public $errorMessage = '';
    public $roles;

    public function mount()
    {
        $this->roles = Role::get();
    }

    public function save()
    {
        if ($this->selectedUser->hasRole('admin')) {
            $this->errorMessage = 'No puedes cambiar el rol de un administrador';
            return;
        }

        $this->selectedUser->syncRoles($this->selectedRole);
        $newRole = Rol::where('name', strtoupper($this->selectedRole))->first();
        $this->selectedUser->rol = $newRole->id;
        $this->selectedUser->save();
        $this->successMessage = 'Usuario actualizado correctamente';
        $this->dispatch('refreshUsers');
    }

    #[On('editUser')]
    public function editUser($id)
    {
        $this->selectedUser = User::find($id);
        $this->selectedRole = $this->selectedUser->role->name;
    }

    public function render()
    {
        return view('livewire.dashboard.user.show');
    }
}
