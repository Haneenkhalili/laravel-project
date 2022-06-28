<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginPageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    /**@test**/
    public function login_with_valid_email_and_valid_password()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('You have login successfully');
        });
    }

    public function login_with_valid_email_and_invalid_password()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Check Your Password');
        });
    }

    public function login_with_invalid_email_and_valid_password()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('please Check Your Email');
        });
    }

    public function login_with_invalid_email_and_invalid_password()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Please Check Your Information');
        });
    }

    public function login_when_the_field_is_blank()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Please Fill The Field');
        });
    }
    public function verify_the_having_technical_issue_functionality()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }

    public function verify_the_remember_me_functionality()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }


    public function login_with_new_password_only_after_the_user_changed_the_password()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }

    public function login_page_allows_to_login_in_the_same_time_with_different_credentials_in_different_browser()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }

    public function verify_if_the_enter_key_of_the_keyboard_is_working_correctly_on_login_page()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }

    public function verify_the_login_page_and_all_its_controls_in_different_browser()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }
    public function enter_the_character_more_than_the_specified_range_in_each_field()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }

    public function verify_the_timeout_functionality_of_the_login_session()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }

    public function login_with_the_same_credentials_in_different_browser_at_the_same_time()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }

    public function check_the_request_demo_button()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }

    public function check_email_validation()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }

    public function check_the_correct_login_redirect_to_expected_page()   //for new user
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }
}
