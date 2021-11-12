<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Seeder;

class ModelRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function ($user) {
            $user->wallets()->attach(Wallet::find($user->id)->id);
        });
    }
}
