<?php

namespace Tests\Browser;

use Faker\Factory;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $faker = Factory::create();
            $password = $faker->password;
            $browser->visit('/')
                    ->assertSee('Laravel')
                    ->click("div.top-right.links > a:nth-child(2)")
                    ->type('email', $faker->email)
                    ->type('name', $faker->name)
                    ->type('password', $password)
                    ->type('password_confirmation', $password)
                    ->press('Register')
                    ->assertSee('You are logged in!')
            ;
        });
    }
}
