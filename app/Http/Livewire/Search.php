<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Search extends Component
{
    public $visibility;

    public $filtering, $search;

    public function mount()
    {
        $this->visibility = false;
        $this->filtering = Post::all();
    }

    public function updated($search)
    {
        $this->visibility = true;
        $this->filtering = Post::where('description',"Like","%{$this->search}%")->get();
    }

    public function invisible()
    {
        $this->visibility = false;
    }

    public function render()
    {
        return view('livewire.search');
    }
}
