<?php

namespace App\Livewire\Tag;

use App\Models\Tag;
use Livewire\Component;

class All extends Component
{
    public function render()
    {
        return view('livewire.tag.all')->with([
            'tags' => Tag::all()
        ]);
    }
}
