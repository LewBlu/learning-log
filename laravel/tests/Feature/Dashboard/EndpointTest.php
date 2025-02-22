<?php

use App\Models\User;

describe('dashboard endpoints', function(){
    describe('with permission', function() {
        beforeEach(function () {
            $this->user = User::factory()->create();
        });

        test('index', function () {
            $this->actingAs($this->user)->get(route('dashboard.index'))->assertStatus(200);
        });
    });

    describe('without permission', function() {
        test('index', function () {
            $this->get(route('dashboard.index'))->assertRedirect();
        });
    });
});
