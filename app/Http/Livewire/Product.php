<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    public $title;
    public $name;
    public $infos = [];

    public function mount()
    {
        $this->infos[] = 'La aplicación se está montando....';
    }

    public function hydrate()
    {
        $this->infos[] = 'La aplicación se está hidratante....';
    }

    public function updated($name,$value)
    {
        $this->infos[] = 'La aplicación se está actualización....';
    }

    public function updatingName()
    {
        $this->infos[] = 'La aplicación se está actualizar la propiedad del nombre....';
    }

    public function updatedName()
    {
        $this->infos[] = 'La aplicación se está propiedad de nombre actualizada....';
    }

    public function render()
    {
        return view('livewire.product');
    }
}
