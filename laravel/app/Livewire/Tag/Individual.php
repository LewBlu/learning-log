<?php

namespace App\Livewire\Tag;

use App\Models\Tag;
use Livewire\Attributes\On;
use Livewire\Component;

class Individual extends Component
{
    public Tag $tag;
    public bool $isActive = false;

    public function render()
    {
        return view('livewire.tag.individual');
    }

    public function toggleActive(): void
    {
        $this->isActive = !$this->isActive;
        $this->dispatch('article-filter', tagId: $this->tag->id, componentId: $this->id());
    }

    #[On('article-filter')]
    public function tagSelectedElsewhere(string $tagId, string $componentId):void
    {
        if($tagId === $this->tag->id && $componentId !== $this->id()) {
            $this->isActive = !$this->isActive;
        }
    }
}
