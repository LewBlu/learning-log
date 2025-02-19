<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class All extends Component
{

    use WithPagination;

    public function render()
    {
        return view('livewire.article.all')->with([
            'articles' => Article::with('tags')->paginate(10)
        ]);
    }
}
