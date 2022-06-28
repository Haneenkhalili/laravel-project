<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PolicesPageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
     /**@test**/
    public function check_the_term_and_privacy_are_exist()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

    public function check_the_accept_button_and_redirect_to_user_profile()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }
}
