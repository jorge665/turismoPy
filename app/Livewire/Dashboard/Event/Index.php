<?php

namespace App\Livewire\Dashboard\Event;

use App\Livewire\Forms\eventform;
use App\Models\Destination;
use App\Models\Event;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public eventform $form;
    public $isOpen = false;
    public $search = '';
    public $destinos;

    public function mount()
    {
       $this->dispatch('changeTitle', 'Eventos');
       $this->destinos = Destination::with('translations')->get();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    #[Computed()]
    public function events()
    {
        return Event::with('destination')->whereHas('translations', function($query){
            $query->where('name', 'like', '%'.$this->search.'%');
        })->paginate(10);
    }

    #[On('openModal')]
    public function openModal()
    {
        $this->isOpen = true;
    }

    #[On('closeModal')]
    public function closeModal()
    {
        $this->isOpen = false;
        $this->form->reset();
    }

    public function save()
    {
        $this->form->stored();
        $this->closeModal();
        session()->flash('message', 'Evento guardado con éxito');
    }

    public function delete($id)
    {
        Event::find($id)->delete();
        session()->flash('message', 'Evento eliminado con éxito');
    }

    public function edit($id)
    {
        $this->form->event_id = $id;
        $this->form->load($id);
        $this->openModal();
        
    }

    #[Title('Eventos')]
    public function render()
    {
        return view('livewire.dashboard.event.index')
        ->layout('components.layouts.adminDash');
    }
}
