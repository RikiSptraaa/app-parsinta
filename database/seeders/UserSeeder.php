<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        // collect([
        //     [
        //         'name' => 'Riki Eprilion Saputra',
        //         'email' => 'rickzzsaputra28@gmail.com',
        //         'email_verified_at' => now(),
        //         'password' => bcrypt('password'),
        //     ]
        // ])->each(function ($user) {
        //     User::create($user);
        // });
    }
}
