<?php

namespace App\Livewire\Forms;

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
}
