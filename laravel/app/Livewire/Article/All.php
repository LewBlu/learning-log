<?php

namespace App\Livewire\Article;

use App\Models\Article;

use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class All extends Component
{
    use WithPagination;

    public ?string $selectedTag = null;

    public function render()
    {
        return view('livewire.article.all')->with([
            'articles' => $this->getArticles()
        ]);
    }

    #[On('article-filter')]
    public function updateSelectedTag(?string $tag)
    {
        $this->selectedTag = $this->selectedTag == $tag ? null : $tag;
    }

    public function getArticles()
    {
        return Article::query()
            ->when(!is_null($this->selectedTag), function(Builder $query){
                return $query->whereHas('tags',function (Builder $query) {
                    return $query->where('name', $this->selectedTag);
                });
            })
            ->with('tags')
            ->get();
    }
}
