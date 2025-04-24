<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group regist
     * 
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000')
                    ->assertSee('Enterprise')
                    ->clickLink('Register')
                    ->assertPathIs('/register')
                    ->type('email','josh.sinaga18@gmail.com' )//Berinteraksi dengan elemen input
                    ->type('password_confirmation', 'password')//Berinteraksi dengan elemen input
                    ->press('REGISTER');


                    
        });
    }
}
