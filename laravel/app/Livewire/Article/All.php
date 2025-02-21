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

    public array $selectedTags = [];

    public function render()
    {
        return view('livewire.article.all')->with([
            'articles' => $this->getArticles()
        ]);
    }

    #[On('article-filter')]
    public function updateSelectedTag(string $tagId)
    {
        $alreadySelected = array_search($tagId, $this->selectedTags);
        if($alreadySelected !== false) {
            unset($this->selectedTags[$alreadySelected]);
        } else {
            $this->selectedTags[] = $tagId;
        }
    }

    public function getArticles()
    {
        return Article::query()
            ->when(count($this->selectedTags), function(Builder $query){
                return $query->whereHas('tags',function (Builder $query) {
                    return $query->whereIn('id', $this->selectedTags);
                });
            })
            ->with('tags')
            ->paginate(10);
    }
}
