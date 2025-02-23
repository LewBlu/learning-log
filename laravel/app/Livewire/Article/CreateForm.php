<?php

namespace App\Livewire\Article;

use App\Livewire\Forms\ArticleForm;
use App\Models\Tag;
use Livewire\Component;

class CreateForm extends Component
{
    public ArticleForm $form;

    public function render()
    {
        return view('livewire.article.create-form', [
            'tags' => Tag::all(),
        ]);
    }

    public function save()
    {
        $article = $this->form->store();
        return redirect()->route('article.show', ['article' => $article->id]);
    }
}
