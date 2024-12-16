<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Пример добавления нескольких пользователей
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('12345678'), // Замените на реальный пароль
            'role' => 'admin', // Предположим, у вас есть поле role
        ]);

        User::create([
            'name' => 'Moderator',
            'email' => 'moderator@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'moderator',
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'user',
        ]);
    }
}
