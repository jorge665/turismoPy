<?php

namespace App\Livewire\Forms;

use App\Models\Event;
use Livewire\Attributes\Validate;
use Livewire\Form;

class eventform extends Form
{
    //
    public $event_id;

    #[Validate('required|Exists:destinations,id')]
    public $destination_id;

    #[Validate('required|date|before:end_date')]
    public $start_date;

    #[Validate('required|date|after:start_date')]
    public $end_date;

    #[Validate('nullable|max:255')]
    public $schedule;

    #[Validate('nullable|numeric')]
    public $price;

    #[Validate('required|max:255')]
    public $name;

    #[Validate('required')]
    public $descriptionEsp;

    #[Validate('required')]
    public $descriptionEng;

    protected $messages = [
        'destination_id.required' => 'Seleccione un destino',
        'destination_id.exists' => 'El destino seleccionado no existe',
        'start_date.required' => 'Seleccione una fecha de inicio',
        'start_date.date' => 'La fecha de inicio no es válida',
        'end_date.required' => 'Seleccione una fecha de fin',
        'end_date.date' => 'La fecha de fin no es válida',
        'end_date.after' => 'La fecha de fin debe ser posterior a la fecha de inicio',
        'start_date.before' => 'La fecha de inicio debe ser anterior a la fecha de fin',
        'schedule.max' => 'El horario no puede tener más de 255 caracteres',
        'price.numeric' => 'El precio debe ser un número',
        'name.required' => 'Ingrese un nombre',
        'name.max' => 'El nombre no puede tener más de 255 caracteres',
        'descriptionEsp.required' => 'Ingrese una descripción en español',
        'descriptionEng.required' => 'Ingrese una descripción en inglés',
    ];


    public function stored()
    {
        $this->event_id ? $this->updated() : $this->create();
    }

    protected function create()
    {
        $data = $this->validate();
        $event = Event::create($data);

        $event->translations()->createMany([
            [
                'language' => 'es',
                'name' => $this->name,
                'description' => $this->descriptionEsp
            ],
            [
                'language' => 'eng',
                'name' => $this->name,
                'description' => $this->descriptionEng
            ]
        ]);
    }

    public function load()
    {
        $event = Event::find($this->event_id);
        $this->destination_id = $event->destination_id;
        $this->start_date = $event->start_date;
        $this->end_date = $event->end_date;
        $this->schedule = $event->schedule;
        $this->price = $event->price;
        $this->name = $event->translations->where('language', 'es')->first()->name;
        $this->descriptionEsp = $event->translations->where('language', 'es')->first()->description;
        $this->descriptionEng = $event->translations->where('language', 'eng')->first()->description;
    }

    protected function updated()
    {
        $this->validate();

        $event = Event::find($this->event_id);
        $event->update([
            'destination_id' => $this->destination_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'schedule' => $this->schedule,
            'price' => $this->price
        ]);

        $event->translations->where('language', 'es')->first()->update([
            'name' => $this->name,
            'description' => $this->descriptionEsp
        ]);

        $event->translations->where('language', 'eng')->first()->update([
            'name' => $this->name,
            'description' => $this->descriptionEng
        ]);

        $event->save();
    }

}
