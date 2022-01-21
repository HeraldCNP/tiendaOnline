<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Herald Choque Vargas',
            'email' => 'heraldcnp@gmail.com',
            'password' => bcrypt('123'),
        ]);
    }
}
