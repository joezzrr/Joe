<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EditNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group editnote
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000')
            ->assertPathIs('/notes')//Memastikan bahwa teks yang diberikan terdapat
            ->clickLink('Edit')//Menekan tautan di browser
            ->assertPathIs('/edit-note-page/1')//Memastikan bahwa teks yang diberikan terdapat
            ->type('title','blabla' )//Berinteraksi dengan elemen input
            ->type('description', 'blablablabla')//Berinteraksi dengan elemen input
            ->press('UPDATE');//Menekan elemen tombol pada halaman
        });
    }
}
