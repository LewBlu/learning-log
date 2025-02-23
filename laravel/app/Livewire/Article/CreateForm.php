<?php

namespace App\Livewire\Article;

use App\Livewire\Forms\ArticleForm;
use App\Models\Tag;
use Livewire\Attributes\On;
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

    #[On('code-updated')]
    public function updateCode($code)
    {
        $this->form->example = $code;
    }

    public function save()
    {
        $article = $this->form->store();
        return redirect()->route('article.show', ['article' => $article->id]);
    }
}
