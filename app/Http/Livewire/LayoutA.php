<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class LayoutA extends Component
{
    use WithFileUploads;

    public $photo, $description, $postarray;

    public function mount()
    {
        $this->postarray = Post::all();
    }

    public function write()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $path = $this->photo->store("public");

        Post::create([
            "imagepath" => $path,
            "description" => $this->description
        ]);

        $this->postarray = Post::all();

    }

    public function render()
    {
        return view('livewire.layout-a');
    }
}
