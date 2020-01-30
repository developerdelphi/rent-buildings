<?php

use App\Models\Page;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        User::create([
            'name' => 'Leo Buchner',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);

        Page::create([
            'parent_id' => null,
            'title' => 'Quem Somos',
            'slug' => 'quem-somos',
            'body' => 'Conteúdo de Quem somos'
        ]);

        Page::create([
            'parent_id' => 1,
            'title' => 'Missão',
            'slug' => 'missao',
            'body' => 'Conteúdo de Missão'
        ]);

        Page::create([
            'parent_id' => 1,
            'title' => 'Visão',
            'slug' => 'visao',
            'body' => 'Conteúdo de Visão'
        ]);
    }
}
