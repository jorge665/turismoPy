<?php

namespace App\Livewire\Dashboard\Admin;

use App\Models\Activity;
use App\Models\BlogPost;
use App\Models\Destination;
use App\Models\Event;
use App\Models\Guide;
use App\Models\News;
use App\Models\PointOfInterest;
use App\Models\Review;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

class Dashboard extends Component
{
    public int $usuarios = 0, $destinos = 0, 
    $actividades = 0, $guias = 0,$poi = 0, $eventos = 0, $noticias = 0, $blogs = 0, $reviews = 0;

    public function mount()
    {
        $this->usuarios = User::count();
        $this->destinos = Destination::count();
        $this->actividades = Activity::count();
        $this->guias = Guide::count();
        $this->poi = PointOfInterest::count();
        $this->eventos = Event::count();
        $this->noticias = News::count();
        $this->blogs = BlogPost::count();
        $this->reviews = Review::count();

        $this->dispatch('changeTitle', 'Tablero');
    }

    #[Title('Dashboard')]
    public function render()
    {
        return view('livewire.dashboard.admin.dashboard')
            ->layout('components.layouts.adminDash');
    }
}
