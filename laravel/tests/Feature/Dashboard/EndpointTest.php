<?php

use App\Models\User;

describe('Dashboard endpoints', function(){
    describe('With permission', function() {
        beforeEach(function () {
            $this->user = User::factory()->create();
        });

        test('index', function () {
            $this->actingAs($this->user)
                ->get(route('dashboard.index'))
                ->assertOk();
        });
    });

    describe('Without permission', function() {
        test('index', function () {
            $this->get(route('dashboard.index'))
                ->assertRedirect(route('login'));
        });
    });
});
