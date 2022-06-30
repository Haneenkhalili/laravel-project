<?php

namespace Tests\Browser\Browser;

use Tests\DuskTestCase;


class AddStudentTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     * @throws \Throwable
     */


    /** @test
     * @throws \Throwable
     */
//    public function bestCaseAddStudent()
//    {
//        $this->browse(function (Browser $browser) {
//            $browser->visit(new  login)
//                    ->assertSee('Login')
//                     ->type('@email','haneen.alkhalili-96@hotmail.com')
//                     ->type('@password','12345678')
//                     ->click('@button')
//                     ->assertSee('You are logged in!')
//                     ->clickLink('Students')
//                     ->assertSee('All Students')
//                     ->clickLink('Add Student')
//                ->on(new AddStudent)
//                     ->assertSee('Add Student')
//                     ->type('@name','ahmad')
//                     ->type('@email','ahmad27@gmail.com')
//                     ->type('@address','irbid')
//                     ->type('@password','12345678');
//            $items = $browser->elements('select[name^="course[]"]');
//
//            foreach ($items as $item) {
//                $options = $item->findElements(WebDriverBy::cssSelector('option:not([disabled])'));
//
//                $options[array_rand($options)]->click();
//            }
//
//            $browser->click('@addButton');
//
//        });
//    }


//            public function takenEmail(){
//                $this->browse(function (Browser $browser) {
//                    $browser->visit(new  login)
//                        ->assertSee('Login')
//                        ->type('@email','haneen.alkhalili-96@hotmail.com')
//                        ->type('@password','12345678')
//                        ->click('@button')
//                        ->assertSee('You are logged in!')
//                        ->clickLink('Students')
//                        ->assertSee('All Students')
//                        ->clickLink('Add Student')
//                        ->on(new AddStudent)
//                        ->assertSee('Add Student')
//                        ->type('@name','ahmad')
//                        ->type('@email','belal@gmail.com')
//                        ->type('@address','irbid')
//                        ->type('@password','12345678');
//                    $items = $browser->elements('select[name^="course[]"]');
//
//                    foreach ($items as $item) {
//                        $options = $item->findElements(WebDriverBy::cssSelector('option:not([disabled])'));
//
//                        $options[array_rand($options)]->click();
//                    }
//
//                    $browser->pause(900)
//                        ->click('@addButton')
//                        ->clear('@name')
//                        ->clear('@email')
//                        ->clear('@address')
//                        ->clear('@password')
//                    ->assertSee('The email has already been taken.')
//                        ->pause(1000)
//
//
//                    ;
//
//                });
//
//            }


//            public function emptyAllField(){
//        $this->browse(function (Browser $browser) {
//            $browser->visit(new  login)
//                ->assertSee('Login')
//                ->type('@email','haneen.alkhalili-96@hotmail.com')
//                ->type('@password','12345678')
//                ->click('@button')
//                ->assertSee('You are logged in!')
//                ->clickLink('Students')
//                ->assertSee('All Students')
//                ->clickLink('Add Student')
//                ->on(new AddStudent)
//                ->assertSee('Add Student')
//                ->assertInputMissing('@name')
//                ->assertInputMissing('@email')
//                ->assertInputMissing('@address')
//                ->assertInputMissing('@password')
//                ->assertInputMissing('@select')
//                ->click('@addButton')
//                ->assertSee('Name is required')
//                ->assertSee('The email field is required.')
//                ->assertSee('The address field is required.')
//                ->assertSee ('The password field is required.')
//                ->assertSee('The course field is required.')
//
//            ;
//
//        });
//
//    }




//            public function emptyNameField(){
//                $this->browse(function (Browser $browser) {
//                    $browser->visit(new  login)
//                        ->assertSee('Login')
//                        ->type('@email','haneen.alkhalili-96@hotmail.com')
//                        ->type('@password','12345678')
//                        ->click('@button')
//                        ->assertSee('You are logged in!')
//                        ->clickLink('Students')
//                        ->assertSee('All Students')
//                        ->clickLink('Add Student')
//                        ->on(new AddStudent)
//                        ->assertSee('Add Student')
//                        ->assertInputMissing('@name')
//                        ->type('@email','haneen.alkhaliooli-96@hotmail.com')
//                        ->type('@address','irbid')
//                        ->type('@password','12345678');
//                    $items = $browser->elements('select[name^="course[]"]');
//
//                    foreach ($items as $item) {
//                        $options = $item->findElements(WebDriverBy::cssSelector('option:not([disabled])'));
//
//                        $options[array_rand($options)]->click();
//                    }
//
//                    $browser->pause(900)
//                        ->click('@addButton')
//                        ->assertSee('Name is required')
//                        ->pause(1000)
//
//
//                    ;
//
//                });
//
//            }



//             public function passwordCharacter(){
//         $this->browse(function (Browser $browser) {
//            $browser->visit(new  login)
//                    ->assertSee('Login')
//                     ->type('@email','haneen.alkhalili-96@hotmail.com')
//                     ->type('@password','12345678')
//                     ->click('@button')
//                     ->assertSee('You are logged in!')
//                     ->clickLink('Students')
//                     ->assertSee('All Students')
//                     ->clickLink('Add Student')
//                ->on(new AddStudent)
//                     ->assertSee('Add Student')
//                     ->type('@name','ahmad')
//                     ->type('@email','ahhmad@gmail.com')
//                     ->type('@address','irbid')
//                     ->type('@password','123');
//            $items = $browser->elements('select[name^="course[]"]');
//
//            foreach ($items as $item) {
//                $options = $item->findElements(WebDriverBy::cssSelector('option:not([disabled])'));
//
//                $options[array_rand($options)]->click();
//            }
//
//            $browser->click('@addButton')
//            ->assertSee('The password must be at least 5 characters.')
//            ->pause(2000);
//
//        });
//     }


//            public function backButton(){
//                $this->browse(function (Browser $browser) {
//            $browser->visit(new  login)
//                    ->assertSee('Login')
//                     ->type('@email','haneen.alkhalili-96@hotmail.com')
//                     ->type('@password','12345678')
//                     ->click('@button')
//                     ->assertSee('You are logged in!')
//
//                     ->clickLink('Students')
//                     ->assertSee('All Students')
//                     ->clickLink('Add Student')
//                    ->on(new AddStudent)
//                     ->assertSee('Add Student')
//                ->click('@backButton')
//                ->assertSee('All Students')
//                ->pause(2000)
//            ;
//                });
//            }







}
