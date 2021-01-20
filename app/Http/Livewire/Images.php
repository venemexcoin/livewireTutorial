<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Image;
use Livewire\WithFileUploads;

class Images extends Component
{

    public $images = [];

    use WithFileUploads;
    
    public function uploadImages()
    {
        foreach($this->images as $key=>$image){
            $this->images[$key] = $image->store('images', 'public');
        }
        $this->images = json_encode($this->images);
        Image::create(['filename'=>$this->images]);
        session()->flash('message','Images successfully uploaded');
        $this->emit('imagesUploaded');
    }

    public function render()
    {
        return view('livewire.images');
    }
}

/* con cuatro archivos no manda error pero al colocar 5 se desploma */