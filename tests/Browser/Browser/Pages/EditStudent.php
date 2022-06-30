<?php

namespace Tests\Browser\Browser\Pages;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page;

class EditStudent extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/students/3';
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
            '@name' => 'input[name=name]',
            '@email'=>'input[name=email]',
            '@address'=>'input[name=address]',
            '@updateButton'=>'.btn-primary'

        ];
    }
}
