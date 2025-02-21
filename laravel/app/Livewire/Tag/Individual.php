<?php

namespace App\Livewire\Tag;

use App\Models\Tag;
use Livewire\Component;

class Individual extends Component
{
    public Tag $tag;
    public bool $isActive = false;

    public function render()
    {
        return view('livewire.tag.individual');
    }
}
