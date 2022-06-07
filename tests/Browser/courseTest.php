<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\Course;
use Tests\Browser\Pages\Login;
use Tests\DuskTestCase;

class courseTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */


    use WithFaker;
    /** @test */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new Login())
                ->type('@email','haneen.alkhalili-96@hotmail.com')
                     ->type('@password','12345678')
                     ->click('@button')
                     ->assertSee('You are logged in!')
                     ->clickLink('Courses')
                    ->assertSee('All courses')
                    ->clickLink('Add Course')
                    ->assertSee('Add Courses')
                    ->on(new Course())
                 ->type('@name',$this->faker->languageCode)
                ->type('@prof',$this->faker->name)
                ->click('@button')



            ;
        });
    }
}
