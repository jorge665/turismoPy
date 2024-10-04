<?php

namespace App\Livewire\Dashboard\User;

use App\Livewire\Forms\userform;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;


class Table extends Component
{
    use WithPagination;
    public userform $form;
    public $selectedUserId, $search, $successMessage, $errorMessage; 
    
    #[Computed()]
    #[On('refreshUsers')]
    public function users()
    {
        if (!empty($this->search)) {
            return User::where('email', 'like', '%'.$this->search.'%')
            ->orWhere('name', 'like', '%'.$this->search.'%')
            ->paginate(5);
        }

        return User::paginate(5);
    }

    public function selectUser($id)
    {
        $this->selectedUserId = $id;
    }

    public function editUser($id)
    {
        $this->dispatch('editUser', $id);
    }

    public function confirmDelete($id)
    {
        if(Auth::id() == $id) {
            $this->errorMessage = 'No puedes eliminar tu propio usuario';
            return;
        }

        $this->form->deleteUser($id);
        $this->successMessage = 'Usuario eliminado correctamente';
    }

    public function render()
    {
        return view('livewire.dashboard.user.table');
    }
}
