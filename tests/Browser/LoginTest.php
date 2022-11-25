<?php

namespace Tests\Browser;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    use DatabaseMigrations;

    public function testHome()
    {
        $this->browse(function (Browser $browser){
            $browser->visit('/home')
                    ->assertSee("Home");
        });
    }

    public function test_login()
    {
        $user = User::factory()->create([
            'email' => 'user@user.com',
        ]);
 
        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                    ->type('email', $user->email)
                    ->type('password', 'password')
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard');
        });
    }


    public function test_register()
    {
      
        $this->browse(function ($browser){
            $browser->visit('/register')
                    ->type('nama_lengkap', "si user2")
                    ->type('username', "user2")
                    ->type('email', "user2@user2.com")
                    ->type('email', "user2@user2.com")
                    ->type('email', "user2@user2.com")
                    ->type('password', 'password')
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard');
        });
    }
}
