<?php

use App\Livewire\Article\All as ArticleAll;
use App\Livewire\Tag\Individual;
use App\Models\Tag;
use App\Models\User;

describe('Dashboard Pages', function() {
    beforeEach(function () {
        $this->user = User::factory()->create();
    });

    describe('index - with data', function() {
        it('displays existing tags', function() {
            $tag = Tag::factory()->create();

            $this->actingAs($this->user)
                ->get(route('dashboard.index'))
                ->assertSeeLivewire(Individual::class)
                ->assertSee($tag->name);
        });

        it('displays existing articles', function() {
            $this->actingAs($this->user)
                ->get(route('dashboard.index'))
                ->assertSeeLivewire(ArticleAll::class);
        });
    });
});
