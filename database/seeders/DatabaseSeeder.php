<?php

namespace Database\Seeders;

use App\Models\User;
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
        $this->call([
            UserSeeder::class,
            WalletSeeder::class,
            ModelRelationSeeder::class
        ]);

        User::factory()->create(
            ['email' => 'dev@tass.by']
        );
    }
}
