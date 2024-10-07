<?php

namespace App\Livewire\Dashboard\Destination;

use App\Livewire\Forms\destinationform;
use App\Models\City;
use App\Models\Department;
use App\Models\Destination;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    use WithFileUploads;

    public destinationform $form;

    public $isOpen=false;
    public $search = '';
    public $departments;
    public $cities = [];

    public function mount()
    {
        $this->departments = Department::all();
        $this->cities = City::all();
        $this->dispatch('changeTitle','Gestión de Destinos');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatedFormDepartmentId($value)
    {
        $this->cities = City::where('department_id', $value)->get();
    }

    #[Computed()]
    public function destinations()
    {
        return Destination::with('translations', 'city')
            ->whereHas('translations', function ($query) {
            $query->where('name', 'like', '%' . $this->search . '%');
        })->paginate(10);
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
        $this->form->reset();
    }

    public function stored()
    {
        $this->form->save();
        $this->form->reset();
        $this->closeModal();
        session()->flash('message', 'Registro almacenado correctamente');
    }

    public function edit($id)
    {
        $this->form->destination_id = $id;
        $this->form->load();
        $this->openModal();
    }

    public function delete($id)
    {
        Destination::destroy($id);
        $this->resetPage();
        $this->destinations();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    #[Title('Destinos')]
    public function render()
    {
        return view('livewire.dashboard.destination.index')
        ->layout('components.layouts.adminDash');
    }
}
