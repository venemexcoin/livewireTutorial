<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Upload;
use Livewire\WithFileUploads;

class Uploads extends Component
{
    public $title;
    public $filename;

    use WithFileUploads;
    
    public function fileUpload()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'filename' => 'required'
        ]);

        $filename = $this->filename->store('file','public');
        $validatedData['filename'] = $filename;
        Upload::create($validatedData);
        session()->flash('message','File successfully uploaded!');
        $this->emit('fileUploaded');
    }

    public function render()
    {
        return view('livewire.uploads');
    }
}
