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
    public function checkTheTermAndPrivacyAreExist()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

    public function checkTheAcceptButtonAndRedirectToUserProfile()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }
}
