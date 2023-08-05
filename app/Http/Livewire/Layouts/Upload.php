<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;

    public $files = [];

    public $rules = [
        'files.*' => 'image|max:1024'
    ];

    public function handleForm()
    {
        $this->validate();

        foreach ($this->files as $file) {
            $file->storeAs('files', $file->getClientOriginalName());
        }
    }

    public function render()
    {
        return view('livewire.layouts.upload');
    }
}
