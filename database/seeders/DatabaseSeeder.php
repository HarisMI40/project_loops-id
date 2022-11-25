<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'nama_lengkap' => 'user',
            'email' => 'user@user.com',
            'is_active' => 0
        ]);

        $this->call([
            LanggananSeeder::class,
        ]);
    }
}
