<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactPageTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_contact_page_can_be_rendered(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }
}
