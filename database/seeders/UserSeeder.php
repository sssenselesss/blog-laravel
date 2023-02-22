<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'username' => 'avavion.',
            'password' => Hash::make('avavionmvm'),
            'role' => 'admin'
        ]);

        User::query()->create([
            'username' => '1vers',
            'password' => Hash::make('vazgenforever')
        ]);
    }
}
