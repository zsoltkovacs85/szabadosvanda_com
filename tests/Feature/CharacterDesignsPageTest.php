<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CharacterDesignsPageTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_character_designs_page_can_be_rendered(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
