<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Tests\Browser\Pages\Project;


class projectTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    use WithFaker;
    /** @test */
//    public function addProject()
//    {
//        $this->browse(function (Browser $browser) {
//            $browser->visit('/students')
//                    ->assertSee('All Students')
//                    ->clickAtXPath('//*[@id="app"]/main/div/div/div/div/div[2]/table/tbody/tr[5]/td[8]/a')
//                ->pause(300)
//                    ->clickAtXPath('//*[@id="app"]/main/div/div/div/div/div[2]/table/tbody/tr/td[2]/a')
//                ->type('name',$this->faker->word)
//                ->pause(3000)
//                ->click('.btn-primary')
//
//
//
//            ;
//        });
//    }



//     public function addTask(){
//                 $this->browse(function (Browser $browser) {
//            $browser->visit('/students')
//                    ->assertSee('All Students')
//                ->clickAtXPath('//*[@id="app"]/main/div/div/div/div/div[2]/table/tbody/tr[5]/td[8]/a')
//                ->pause(300)
//                ->clickAtXPath('//*[@id="app"]/main/div/div/div/div/div[2]/table/tbody/tr/td[3]/a')
//                ->assertSee('Add Tasks')
//                ->type('name',$this->faker->text)
//                ->click('.btn-success')
//                ;
//                 });
//     }



     public function dragAndDropTask(){
         $this->browse(function (Browser $browser) {
             $browser->visit('/students')
                 ->assertSee('All Students')
                 ->clickAtXPath('//*[@id="app"]/main/div/div/div/div/div[2]/table/tbody/tr[5]/td[8]/a')
                 ->pause(300)
                 ->clickAtXPath('//*[@id="app"]/main/div/div/div/div/div[2]/table/tbody/tr/td[3]/a')
                 ->clickLink('Show t
                 asks')
                ->drag('#tablecontents > tr:nth-child(3)','#tablecontents > tr.row1.odd')
                 ->pause(2000)
             ;

         });
     }



}
