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
        User::create([
            'name' => 'Leonardo Mauricio Cano',
            'email' => 'leomaucano111@gmail.com',
            // 'password' => Hash::make(12345678),
            'password' => bcrypt('12345678'),
        ]);

        User::factory(19)->create();
    }
}
