<?php

namespace Tests\Unit;

use App\Http\Controllers\PostController;
use App\Post;
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
        $postC = new PostController();
        $amount = $postC->getAmountOfPosts();

        $this->assertTrue(Post::count() == $amount);
    }
}
