<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testPostsPage()
    {
        \Auth::login(User::first());
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }

    public function testPostsCreate()
    {
        \Auth::login(User::first());
        $response = $this->post('/posts/store',
            [
                'title' => '123123123',
                'content' => 'asdasdsdfsdfdgdfgdfgdfg'
            ]);

        $response->assertLocation('/posts');
    }
}
