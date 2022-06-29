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
    public function loginWithValidEmailAndValidPassword()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('You have login successfully');
        });
    }

    public function loginWithValidEmailAndInvalidPassword()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Check Your Password');
        });
    }

    public function loginWithInvalidEmailAndValidPassword()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('please Check Your Email');
        });
    }

    public function loginWithInvalidEmailAndInvalidPassword()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Please Check Your Information');
        });
    }

    public function loginWhenTheFieldIsBlank()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Please Fill The Field');
        });
    }
    public function verifyTheHavingTechnicalIssueFunctionality()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }

    public function verifyTheRememberMeFunctionality()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }


    public function loginWithNewPasswordOnlyAfterTheUserChangedThePassword()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }

    public function loginPageAllowsToLoginInTheSameTimeWithDifferentCredentialsInDifferentBrowser()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }

    public function verifyIfTheEnterKeyOfTheKeyboardIsWorkingCorrectlyOnLoginPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }

    public function verifyTheLoginPageAndAllItsControlsInDifferentBrowser()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }
    public function enterTheCharacterMoreThanTheSpecifiedRangeInEachField()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }

    public function verifyTheTimeoutFunctionalityOfTheLoginSession()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }

    public function loginWithTheSameCredentialsInDifferentBrowserAtTheSameTime()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }

    public function checkTheRequestDemoButton()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }

    public function checkEmailValidation()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }

    public function checkTheCorrectLoginRedirectToExpectedPage()   //for new user
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('You have login successfully');
        });
    }
}
