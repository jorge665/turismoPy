<?php

namespace App\Livewire\Dashboard\Partials\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class Header extends Component
{
    public $title = '';

    #[On('changeTitle')]
    public function changeTitle($title)
    {
        $this->title = $title;
    }


    public function render()
    {
        return view('livewire.dashboard.partials.admin.header');
    }
}
