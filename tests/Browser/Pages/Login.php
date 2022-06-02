<?php

namespace Tests\Browser\Pages;

use App\Models\User;
use Laravel\Dusk\Browser;
use Laravel\Dusk\Page;

/**
 * @method browse(\Closure $param)
 */
class Login extends Page
{
    protected $user;

    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/login';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url());
    }





    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@element' => '#selector',
            '@email' => 'input[name=email]',
            '@password'=>'input[name=password]',
            '@button'=>'.btn-primary'
        ];
    }


}
