<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User;
        $usuario->name = 'Nire Spa';
        $usuario->email = 'nire@spa.com';
        $usuario->save();
    }
}
