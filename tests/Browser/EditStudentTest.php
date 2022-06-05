<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Tests\Browser\Pages\Login;
use Laravel\Dusk\Page;




class EditStudentTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */

    use DatabaseMigrations;

    /**test**/
    public function it_assert_that_can_edit_student_information()
    {
        $user =User::class->create();
        $this->browse(function (Browser $browser) use ($user){
            $browser->visit(new login)
                    ->loginAs('haneen.alkhalili-96@hotmail.com');
        });
    }

}
