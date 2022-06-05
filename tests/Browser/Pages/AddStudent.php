<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page;

class AddStudent extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/students/add-student';
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
            '@password'=>'input[name=password]',
            '@courses'=>'//*[@id="app"]/main/div/div/div/div/div[2]/form/div[6]/span/span[1]/span/span/textarea',
            '@select'=>'//*[@id="select2Multiple"]',
            '@addButton'=>'.btn-primary',
            '@backButton'=>'.btn-warning'
        ];
    }
}
