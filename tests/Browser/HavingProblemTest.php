<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HavingProblemTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    /**@test**/
    public function check_enter_a_valid_email()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

    public function check_enter_invalid_email()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function check_having_technical_issue_radiobutton_if_clickable()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function check_forget_password_radiobutton_if_clickable()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function dont_check_any_radiobutton_and_click_submit() //warning message should appear
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function submit_button_clickable_and_show_confirmation_message()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

}
