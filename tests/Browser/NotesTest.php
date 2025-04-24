<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group notes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
            ->type('email','josh.sinaga18@gmail.com' )
            ->type('password', 'password')
            ->press('LOG IN')
            ->pause(2000)
            ->assertPathIs('/dashboard')//Memastikan bahwa teks yang diberikan terdapat
            ->clickLink('Notes')//Menekan tautan di browser
            ->clickLink('Create Note')//Menekan tautan di browser
            ->type('title','Bla Bla' )
            ->type('description', 'bla blabla')
            ->press('CREATE')
            ->assertPathIs('/notes');
        });
    }
}
