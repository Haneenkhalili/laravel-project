<?php

namespace Tests\Browser\insight;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MyPortfolioTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function checkTheMyPortfolioRedirectToExpectedPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

    public function checkAddAnalyticsAsDashboard()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }
    public function checkAddRiskAlertAsDynamicNumber()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }


    public function checkTheColumnNameOfTable()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function checkAddTheBrandsHyperlinkAndRedirectToAnotherPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }




}
