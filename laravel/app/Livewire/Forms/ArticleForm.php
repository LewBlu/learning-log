<?php

namespace App\Livewire\Forms;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ArticleForm extends Form
{
    #[Validate('required')]
    public string $title;

    #[Validate('required')]
    public string $description;

    #[Validate('required')]
    public string $example;

    public array $selectedTags = [];

    public function store(): Article
    {
        $this->validate();

        $article = Article::create([
            ...$this->except('selectedTags'),
            'owner_id' => Auth::id(),
        ]);

        $article->tags()->attach($this->selectedTags);
        return $article;
    }
}
