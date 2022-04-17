<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Chaco;
use App\Models\ChacoPers;
use App\Models\Division;
use App\Models\Secretariat;
use App\Models\Subdivision;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Article::factory(10)->create();
        Chaco::factory(8)->create();
        ChacoPers::factory(8)->create();
        Division::factory(8)->create();
        Subdivision::factory(8)->create();
        Secretariat::factory(8)->create();
    }
}
