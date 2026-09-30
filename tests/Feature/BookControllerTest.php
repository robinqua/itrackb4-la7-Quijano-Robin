<?php

namespace Tests\Feature;

use Tests\TestCase;

class BookControllerTest extends TestCase
{
    public function test_books_index_route_returns_successful_response(): void
    {
        $response = $this->get('/books');

        $response->assertStatus(200);
    }

    public function test_books_show_route_returns_successful_response_for_existing_book(): void
    {
        $response = $this->get('/books/1');

        $response->assertStatus(200);
    }
}
