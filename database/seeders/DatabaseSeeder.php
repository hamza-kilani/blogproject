<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Création de 10 utilisateurs, chacun avec 5 articles
        User::factory(10)->hasPosts(5)->create();
    }
}
