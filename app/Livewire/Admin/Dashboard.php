<?php

namespace App\Livewire\Admin;

use App\Models\Activity;
use App\Models\Destination;
use App\Models\Event;
use App\Models\News;
use App\Models\PointOfInterest;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

class Dashboard extends Component
{
    public int $usuarios = 0, $destinos = 0, 
    $actividades = 0, $poi = 0, $eventos = 0, $noticias = 0;

    public function mount()
    {
        $this->usuarios = User::count();
        $this->destinos = Destination::count();
        $this->actividades = Activity::count();
        $this->poi = PointOfInterest::count();
        $this->eventos = Event::count();
        $this->noticias = News::count();
    }

    #[Title('Dashboard')]
    public function render()
    {
        return view('livewire.admin.dashboard')
            ->layout('components.layouts.adminDash');
    }
}
