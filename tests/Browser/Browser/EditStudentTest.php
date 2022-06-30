<?php

namespace Tests\Browser\Browser;
use Tests\DuskTestCase;


class EditStudentTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */


    /**@test
     *@throws \Throwable
     */

    /** @test */
//    public function adminCanEdit()
//    {
//        $this->browse(function (Browser $browser) {
//            $browser->visit(new  login)
//                ->assertSee('Login')
//                ->type('@email', 'haneen.alkhalili-96@hotmail.com')
//                ->type('@password', '12345678')
//                ->click('@button')
//                ->assertSee('You are logged in!')
//                ->clickLink('Students')
//                ->assertSee('All Students')
//                ->clickLink('Edit')
//                ->assertSee('Edit & Update Student');
//                    $browser->pause(3000)
//                        ->on(new EditStudent())
//                        ->type('@name','belal')
//                        ->type('@email','belal@gmail.com')
//                        ->type('@address','jordan')
//                        ->click('@updateButton')
//            ;
//
//        });
//    }

//    public function errorEmail(){
//        $this->browse(function (Browser $browser) {
//            $browser->visit(new  login)
//                ->assertSee('Login')
//                ->type('@email', 'haneen.alkhalili-96@hotmail.com')
//                ->type('@password', '12345678')
//                ->click('@button')
//                ->assertSee('You are logged in!')
//                ->clickLink('Students')
//                ->assertSee('All Students')
//                ->clickLink('Edit')
//                ->assertSee('Edit & Update Student')
//                ->on(new EditStudent())
//                ->type('@name','belal')
//                ->type('@email','belalgmail.com')
//                ->type('@address','jordan')
//                ->click('@updateButton')
//                ->assertSee('The email must be a valid email address.')
//
//            ;
//            $browser->pause(3000);
//
//
//        });
//
//    }


//    public function writeNumberAndKeyInAddressField(){
//        $this->browse(function (Browser $browser) {
//            $browser->visit(new  login)
//                ->assertSee('Login')
//                ->type('@email', 'haneen.alkhalili-96@hotmail.com')
//                ->type('@password', '12345678')
//                ->click('@button')
//                ->assertSee('You are logged in!')
//                ->clickLink('Students')
//                ->assertSee('All Students')
//                ->clickLink('Edit')
//                ->assertSee('Edit & Update Student')
//                ->on(new EditStudent())
//                ->type('@name','belal')
//                ->type('@email','belal@gmail.com')
//                ->type('@address','jordan**')
//                ->click('@updateButton')
//                ->assertSee('The address format is invalid')
//
//            ;
//            $browser->pause(3000);
//
//
//        });
//    }



//    public function emptyField(){
//        $this->browse(function (Browser $browser) {
//            $browser->visit(new  login)
//                ->assertSee('Login')
//                ->type('@email', 'haneen.alkhalili-96@hotmail.com')
//                ->type('@password', '12345678')
//                ->click('@button')
//                ->assertSee('You are logged in!')
//                ->clickLink('Students')
//                ->assertSee('All Students')
//                ->clickLink('Edit')
//                ->assertSee('Edit & Update Student')
//                ->on(new EditStudent())
//                ->clear('@name')
//                ->clear('@email')
//                ->clear('@address')
//                ->click('@updateButton')
//                ->assertSee('Name is required')
//                ->assertSee('The email field is required.')
//                ->assertSee('The address field is required.')
//
//
//
//            ;
//            $browser->pause(3000);
//
//
//        });
//    }




//    public function deleteRow(){
//        $this->browse(function (Browser $browser) {
//            $browser->visit(new  login)
//                ->assertSee('Login')
//                ->type('@email', 'haneen.alkhalili-96@hotmail.com')
//                ->type('@password', '12345678')
//                ->click('@button')
//                ->assertSee('You are logged in!')
//                ->clickLink('Students')
//                ->assertSee('All Students')
//                ->click('.btn-danger');
//            $browser->pause(3000);
//
//
//        });
//    }

}
