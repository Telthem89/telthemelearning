<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookReversation extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function a_book_can_be_added_to_the_library()
    {
        $this->withoutExceptionHandling();
        $response =$this->post('/book',[
            'title'=>'Emnam',
            'author'=>'Tauzeni'
        ]);
        $response->assertOk();
        $this->assertCount(1,Book::all());
    }
}
