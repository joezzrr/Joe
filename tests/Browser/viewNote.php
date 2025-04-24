<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class viewNote extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group viewnote
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000/notes')
            ->type('email','josh.sinaga18@gmail.com' )
            ->type('password', 'password')
            ->press('LOG IN')
            ->pause(2000)
            ->assertPathIs('/dashboard')
            ->clickLink('Notes')
            ->clickLink('Create Note')
            ->type('title','Bla Bla' )
            ->type('description', 'bla blabla')
            ->press('CREATE')
            ->assertPathIs('/notes');

        });
    }
}
