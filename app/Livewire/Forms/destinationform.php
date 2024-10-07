<?php

namespace App\Livewire\Forms;

use App\Models\Destination;
use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\Form;

class destinationform extends Form
{
    //
    use WithFileUploads;

    public $destination_id = null;
    public $storedImages;

    #[Validate('required|max:255|min:3')]
    public $name;
    #[Validate('required|min:3')]
    public $descriptionEsp;
    #[Validate('required|min:3')]
    public $descriptionEng;
    #[Validate('required|exists:departments,id')]
    public $department_id;
    #[Validate('required|exists:cities,id')]
    public $city_id;
    #[Validate('required|numeric')]
    public $latitude;
    #[Validate('required|numeric')]
    public $longitude;

    #[Validate(['images.*' => 'image|max:5120'])]
    public $images = [];

    #[Validate('nullable|url')]
    public $video;

    #[Validate('url|nullable')]
    public $social_link_facebook;
    #[Validate('url|nullable')]
    public $social_link_instagram;
    #[Validate('required')]
    public $status = 1;

    protected $messages = [
        'name.required' => 'Por favor ingrese el nombre del destino',
        'name.max' => 'El nombre del destino no puede ser mayor a 255 caracteres',
        'name.min' => 'El nombre del destino no puede ser menor a 3 caracteres',
        'descriptionEsp.required' => 'Por favor ingrese la descripción en español',
        'descriptionEsp.min' => 'La descripción en español no puede ser menor a 3 caracteres',
        'descriptionEng.required' => 'Por favor ingrese la descripción en inglés',
        'descriptionEng.min' => 'La descripción en inglés no puede ser menor a 3 caracteres',
        'department_id.required' => 'Por favor seleccione un departamento',
        'department_id.exists' => 'El departamento seleccionado no es válido',
        'city_id.required' => 'Por favor seleccione una ciudad',
        'city_id.exists' => 'La ciudad seleccionada no es válida',
        'latitude.required' => 'Por favor ingrese la latitud',
        'latitude.numeric' => 'La latitud debe ser un número',
        'longitude.required' => 'Por favor ingrese la longitud',
        'longitude.numeric' => 'La longitud debe ser un número',

        'images.*.image' => 'Formato de imagen no válido',
        'images.*.max' => 'La imagen no puede ser mayor a 5MB',

        'videos.url' => 'Formato de video no válido',

        'social_link_facebook.url' => 'El enlace de facebook no es válido',
        'social_link_instagram.url' => 'El enlace de instagram no es válido',
        'status.required' => 'Por favor seleccione un estado',
    ];


    public function save()
    {
        $data = $this->validate();
        $this->destination_id ? $this->update() : $this->store($data);
    }

    protected function store($data)
    {
        $destination = Destination::create(
            [
                'city_id' => $data['city_id'],
                'latitude' => $data['latitude'],
                'longitude' => $data['longitude'],
                'status' => $data['status'],
            ]
        );

        $destination->translations()->createMany(
            [
                [
                    'name' => $data['name'],
                    'description' => $data['descriptionEsp'],
                    'language' => 'es',
                ],
                [
                    'name' => $data['name'],
                    'description' => $data['descriptionEng'],
                    'language' => 'eng',
                ],
            ]
        );

        $destination->media()->createMany(
            array_map(function ($image) {
                return
                    [
                        'media_type' => 'image',
                        'url' => $image->store('destinations', 'public'),
                        'caption' => $image->getClientOriginalName()
                    ];
            }, $this->images)
        );

        $destination->media()->create([
            'media_type' => 'video',
            'url' => $this->video,
        ]);

        $destination->social_links()->createMany(
            [
                [
                    'platform' => 'facebook',
                    'url' => $data['social_link_facebook'],
                ],
                [
                    'platform' => 'instagram',
                    'url' => $data['social_link_instagram'],
                ],
            ]
        );
    }

    protected function update()
    {
        $destination = Destination::find($this->destination_id);
        $destination->city_id = $this->city_id;
        $destination->latitude = $this->latitude;
        $destination->longitude = $this->longitude;
        $destination->status = $this->status;
        $destination->save();

        $destination->translations->where('language', 'es')->first()->update(['name' => $this->name, 'description' => $this->descriptionEsp]);
        $destination->translations->where('language', 'eng')->first()->update(['name' => $this->name, 'description' => $this->descriptionEng]);

        $destination->media->where('media_type', 'image')->each(function ($image) {
            $image->delete();
        });

        $destination->media->where('media_type', 'video')->first()->update(['url' => $this->video]);

        $destination->media()->createMany(
            array_map(function ($image) {
                return
                    [
                        'media_type' => 'image',
                        'url' => $image->store('destinations', 'public'),
                        'caption' => $image->getClientOriginalName()
                    ];
            }, $this->images)
        );

        $destination->social_links->where('platform', 'facebook')->first()->update(['url' => $this->social_link_facebook]);
        $destination->social_links->where('platform', 'instagram')->first()->update(['url' => $this->social_link_instagram]);
    }

    public function load()
    {
        $destination = Destination::with('translations', 'city', 'media', 'social_links')
        ->find($this->destination_id);
        $this->name = $destination->translations[0]->name;
        $this->descriptionEsp = $destination->translations->where('language', 'es')->first()->description;
        $this->descriptionEng = $destination->translations->where('language', 'eng')->first()->description;
        $this->department_id = $destination->city->department_id;
        $this->city_id = $destination->city_id;
        $this->latitude = $destination->latitude;
        $this->longitude = $destination->longitude;
        $this->storedImages = $destination->media->where('media_type', 'image');
        $this->video = str_replace('/watch', '/embed', $destination->media->where('media_type', 'video')->first()->url);
        $this->social_link_facebook = $destination->social_links->where('platform', 'facebook')->first()->url;
        $this->social_link_instagram = $destination->social_links->where('platform', 'instagram')->first()->url;
        $this->status = $destination->status;
    }
}
