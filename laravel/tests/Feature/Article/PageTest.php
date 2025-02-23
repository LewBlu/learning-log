<?php

use App\Livewire\Article\CreateForm;
use App\Models\Article;
use App\Models\Tag;
use App\Models\User;
use function Pest\Laravel\actingAs;

use Illuminate\Support\Facades\Log;
use Livewire\Livewire;

describe('Article Pages', function() {
    beforeEach(function () {
        $this->user = User::factory()->create();
        actingAs($this->user);
    });

    describe('create', function() {
        it('displays create form', function() {
            $this->get(route('article.create'))
                ->assertSeeLivewire(CreateForm::class);
        });

        it('creates article without tags on submit', function() {
            Livewire::test(CreateForm::class)
                ->set('form.title', 'Example Article')
                ->set('form.description', 'Example Description')
                ->set('form.example', 'Example Example')
                ->set('form.selectedTags', [])
                ->call('save')
                ->assertRedirect();

            $this->assertDatabaseHas(Article::class, [
                'title' => 'Example Article',
                'description' => 'Example Description',
                'example' => 'Example Example',
            ]);
        });

        it('creates article with tags on submit', function() {
            $tag = Tag::factory()->create();

            Livewire::test(CreateForm::class)
                ->set('form.title', 'Example Article')
                ->set('form.description', 'Example Description')
                ->set('form.example', 'Example Example')
                ->set('form.selectedTags', [$tag->id])
                ->call('save')
                ->assertRedirect();

            $this->assertDatabaseHas(Article::class, [
                'title' => 'Example Article',
                'description' => 'Example Description',
                'example' => 'Example Example',
            ]);

            $article = Article::first();
            expect($article->tags->count())->toBe(1);
        });

        it('errors on incorrect validation', function() {
            Livewire::test(CreateForm::class)
                ->call('save')
                ->assertHasErrors([
                    'form.title' => ['required'],
                    'form.description' => ['required'],
                    'form.example' => ['required'],
                ]);
        });
    });
});
