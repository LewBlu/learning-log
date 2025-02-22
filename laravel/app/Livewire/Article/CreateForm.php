<?php

namespace App\Livewire\Article;

use App\Livewire\Forms\ArticleForm;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class CreateForm extends Component
{
    public ArticleForm $form;

    public function render()
    {
        return view('livewire.article.create-form');
    }

    public function save()
    {
        $this->validate();

        $article = Article::create([
            ...$this->form->all(),
            'owner_id' => Auth::id(),
        ]);

        return redirect()->route('article.show', ['article' => $article->id]);
    }
}
