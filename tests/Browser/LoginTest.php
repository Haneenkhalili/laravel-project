<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\Login;
use Tests\DuskTestCase;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use Laravel\Dusk\Page;


class LoginTest extends DuskTestCase
{
//    use DatabaseMigrations;
    /**
     * A Dusk test example.
     * @test
     * @return void
     *
     * @throws \Throwable
     */



//    public function successLogin()
//    {
//        $this->browse(function (Browser $browser){
//            $browser->visit(new  login)
//                    ->assertSee('Login')
//                     ->type('@email','haneen.alkhalili-96@hotmail.com')
//                     ->type('@password','12345678')
//                    ->click('@button')
//                    ->assertSee('You are logged in!')
//
//
//            ;
//    });
//}
//         public function inputEmailFiledIsEmpty(){
//             $this->browse(function (Browser $browser){
//                 $browser->visit(new  login)
//                     ->assertSee('Login')
//                     ->type('@password','12345678')
//                     ->click('@button')
//                     ->assertSee('You are logged in!')
//
//
//                 ;
//             });
//         }

//        public function inputPasswordFiledIsEmpty()
//    {
//        $this->browse(function (Browser $browser){
//            $browser->visit(new  login)
//                    ->assertSee('Login')
//                     ->type('@email','haneen.alkhalili-96@hotmail.com')
//                    ->click('@button')
//                    ->assertSee('You are logged in!')
//
//
//            ;
//    });
//}

//    public function invalidEmail()
//    {
//        $this->browse(function (Browser $browser){
//            $browser->visit(new  login)
//                    ->assertSee('Login')
//                     ->type('@email','haneenn.alkhalili-96@hotmail.com')
//                     ->type('@password','12345678')
//                    ->click('@button')
//                    ->assertSee('You are logged in!')
//
//
//            ;
//    });
//}


    public function invalidPassword()
    {

        $this->browse(function (Browser $browser){
            $browser->visit(new  login)
                ->assertSee('Login')
                ->type('@email','haneen.alkhalili-96@hotmail.com')
                ->type('@password','1234')
                ->click('@button')



            ;
        });
    }

}
