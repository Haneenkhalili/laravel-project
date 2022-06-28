<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HomePageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function checkAddTheSearchFunction()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }


    public function checkAddThePersonalizedSearchFunction()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }


    public function checkThePersonalizedSearchFunctionRedirectOpenPopupMessage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function checkTheProfilePictureThatDisplayAndOpenDropList()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function verifyTheSinceForLastLoginInformationThatDisplay()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function verifyTheAnalystCornerShouldBeDisplay()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function verifyTheOurAssetsShouldBeDisplay()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function checkAddReportsSection()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function checkFeaturedForMeIsClickableAndChangeTableInformation()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function checkMyCompanyIsClickableAndChangeTableInformation()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }
    public function check_the_market_is_clickable_and_change_table_information()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }


    public function check_add_analytics_section()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function check_latest_events_analytics_is_clickable_and_change_table_information()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function check_featured_for_me_analytics_is_clickable_and_change_table_information()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function check_my_company_analytics_is_clickable_and_change_table_information()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function check_wishlist_analytics_is_clickable_and_change_table_information()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }


    public function check_add_the_main_table()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function check_latest_events_is_clickable_and_information_of_table_changed()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function check_featured_for_me_is_clickable_and_information_of_table_changed()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function check_my_company_is_clickable_and_information_of_table_changed()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }


    public function check_wishlist_is_clickable_and_information_of_table_changed()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }
    public function check_my_competitor_is_clickable_and_information_of_table_changed()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }


    public function check_add_middle_east_and_clickable()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }


    public function check_add_clinical_trials_and_is_clickable()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function check_add_patents_and_is_clickable()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }


    public function check_add_global_events_and_is_clickable()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }


    public function check_add_economics_and_is_clickable()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }
///////////////////////////////////////////////////////////////

    public function check_add_home_to_navbar_and_is_clickable()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function check_add_companies_to_navbar_and_is_clickable()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function check_add_drugs_to_navbar_and_is_clickable()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }
    public function check_add_therapy_area_to_navbar_and_is_clickable()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function check_add_patents_to_navbar_and_is_clickable()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function check_add_countries_to_navbar_and_is_clickable()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function check_add_events_to_navbar_and_is_clickable()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function check_add_agent_to_navbar_and_is_clickable()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function check_add_wishlist_to_navbar_and_is_clickable()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function check_dd_my_portfolio_to_navbar_and_is_clickable()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    public function check_add_analyst_corner_to_navbar_and_is_clickable()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

}
