<?php

use App\Models\User;

describe('Article endpoints', function(){
    describe('With permission', function() {
        beforeEach(function () {
            $this->user = User::factory()->create();
        });

        test('create', function () {
            $this->actingAs($this->user)
                ->get(route('article.create'))
                ->assertOk();
        });
    });

    describe('Without permission', function() {
        test('create', function () {
            $this->get(route('article.create'))
                ->assertRedirect(route('login'));
        });
    });
});
