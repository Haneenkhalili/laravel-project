<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;


class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *@test
     * @return void
     *
     */
    // public function userRegister()
    // {
    //     $user = (User::class);
    //     $this->browse(function (Browser $browser) use($user) {
    //         $browser->visit('register')
    //                 ->assertSee('Register')
    //                 ->type('name','haneen')
    //                 ->type('email','haneen@gmail.com')
    //                 ->type('password','secret')
    //                 ->type('password_confirmation','secret')
    //                 ->press('Register')
    //                 ->assertSee('You are Register succesfuly!');  //check if 'You are logged In!' text is there on the page.
    //                 ;

    //     });


    // }


    // public function emptyNameField ()
    // {
    //     $user = factory(User::class);
    //     $this->browse(function (Browser $browser)use($user){
    //         $browser->visit('register')
    //                 ->assertInputMissing('name',$user->name);



    //     });
    // }



    public function successLogin()
    {
        $user = (User::class);
        $this->browse(function (Browser $browser)use($user){
            $browser->visit('login')
                    ->assertSee('Login')
                    // ->type('email','demi@gmail.com')
                    // ->type('password','12345678')
                    ->loginAs(User::find(1))
                    ->press('Login')
                    ->assertSee('You are logged in!')
                    ->assertPathIs('/view/students')


            ;
    });

}

}
