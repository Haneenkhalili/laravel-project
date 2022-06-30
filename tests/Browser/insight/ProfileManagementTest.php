<?php

namespace Tests\Browser\insight;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProfileManagementTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     * @throws \Throwable
     */
    /**@test**/
    public function check_the_user_able_to_update_profile_with_valid_information()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

    /**
     * @throws \Throwable
     */
    public function check_the_email_validation()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }


    /**
     * @throws \Throwable
     */
    public function check_the_password_validation()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }


    /**
     * @throws \Throwable
     */
    public function check_the_first_name_validation()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    /**
     * @throws \Throwable
     */
    public function check_the_last_name_validation()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    /**
     * @throws \Throwable
     */
    public function check_the_number_validation()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    /**
     * @throws \Throwable
     */
    public function check_the_profile_picture_validation()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    /**
     * @throws \Throwable
     */
    public function check_the_linkedin_accept_only_link()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    /**
     * @throws \Throwable
     */
    public function check_the_job_title_validation()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }


    /**
     * @throws \Throwable
     */
    public function check_the_linkedin_redirect_to_the_linkedin_profile()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }


    /**
     * @throws \Throwable
     */
    public function check_the_function_dropdown_list()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    /**
     * @throws \Throwable
     */
    public function check_the_preferred_communication_checkboxes_clickable()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    /**
     * @throws \Throwable
     */
    public function check_the_preferred_communication_checkboxes_can_choose_multiple_choice()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }


    /**
     * @throws \Throwable
     */
    public function check_the_notify_me_dropdown_list()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }


    public function check_the_save_button_if_clickable_and_save_changed_in_the_database()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }



}
