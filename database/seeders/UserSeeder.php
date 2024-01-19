<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Pablo',
            'email' => 'robredo@correo.com',
            'password' => Hash::make('CeeoFnTz@')
        ]);

        User::create([
            'name' => 'Luis',
            'email' => 'robredos@correo.com',
            'password' => Hash::make('CeeoFnTz@')

        ]);User::create([
            'name' => 'Javier',
            'email' => 'robredoss@correo.com',
            'password' => Hash::make('CeeoFnTz@')

        ]);User::create([
            'name' => 'Antonio',
            'email' => 'robredosss@correo.com',
            'password' => Hash::make('CeeoFnTz@')

        ]);
    }
}
