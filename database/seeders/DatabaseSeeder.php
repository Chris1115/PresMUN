<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Chaco;
use App\Models\ChacoPers;
use App\Models\Division;
use App\Models\Gallery;
use App\Models\Secretariat;
use App\Models\Subdivision;
use App\Models\Gossip;
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

        Chaco::create([
            'c_name' => 'Crisis',
            'c_topic' => '-',
            'c_description' => '-'
        ]);
        
        Chaco::create([
            'c_name' => 'UNSC',
            'c_topic' => '-',
            'c_description' => '-'
        ]);

        Chaco::create([
            'c_name' => 'UNHCR',
            'c_topic' => '-',
            'c_description' => '-'
        ]);

        Chaco::create([
            'c_name' => 'UNICEF',
            'c_topic' => '-',
            'c_description' => '-'
        ]);

        Chaco::create([
            'c_name' => 'Press',
            'c_topic' => '-',
            'c_description' => '-'
        ]);

        Gossip::factory(8)->create();
        
        Division::create([
            'd_name' => 'Board of Director',
            'd_description' => '-'
        ]);

        Division::create([
            'd_name' => 'Administration',
            'd_description' => '-'
        ]);

        Division::create([
            'd_name' => 'Conference',
            'd_description' => '-'
        ]);

        Division::create([
            'd_name' => 'Data Master',
            'd_description' => '-'
        ]);

        Division::create([
            'd_name' => 'Entrepreneurship',
            'd_description' => '-'
        ]);

        Division::create([
            'd_name' => 'External Affairs',
            'd_description' => '-'
        ]);

        Division::create([
            'd_name' => 'Finance',
            'd_description' => '-'
        ]);

        Division::create([
            'd_name' => 'Food, Beverage & Medic',
            'd_description' => '-'
        ]);

        Division::create([
            'd_name' => 'Internal Affairs',
            'd_description' => '-'
        ]);

        Division::create([
            'd_name' => 'Multimedia, Design & Communication',
            'd_description' => '-'
        ]);

        Division::create([
            'd_name' => 'Substance',
            'd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '1',
            'sd_name' => 'Directorate General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '1',
            'sd_name' => 'Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '1',
            'sd_name' => 'Deputy Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '2',
            'sd_name' => 'Under Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '2',
            'sd_name' => 'Assistance Under Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '2',
            'sd_name' => 'Legality',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '2',
            'sd_name' => 'Data',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '3',
            'sd_name' => 'Under Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '3',
            'sd_name' => 'Assistance Under Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '3',
            'sd_name' => 'Program',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '3',
            'sd_name' => 'Organization',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '4',
            'sd_name' => 'Under Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '4',
            'sd_name' => 'Assistance Under Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '4',
            'sd_name' => 'Web Coordinator',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '4',
            'sd_name' => 'Data Management',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '5',
            'sd_name' => 'Under Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '5',
            'sd_name' => 'Assistance Under Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '5',
            'sd_name' => 'Partnership',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '5',
            'sd_name' => 'Design Merch',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '5',
            'sd_name' => 'Fundraising',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '6',
            'sd_name' => 'Under Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '6',
            'sd_name' => 'Assistance Under Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '6',
            'sd_name' => 'Content Creator',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '6',
            'sd_name' => 'NGO and Goverment Relations',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '6',
            'sd_name' => 'Media Partner',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '6',
            'sd_name' => 'Marketing',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '6',
            'sd_name' => 'Sponsorship and Project Development',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '7',
            'sd_name' => 'Under Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '7',
            'sd_name' => 'Assistance Under Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '7',
            'sd_name' => 'Accounting & Auditor',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '8',
            'sd_name' => 'Under Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '8',
            'sd_name' => 'Assistance Under Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '8',
            'sd_name' => 'Food & Beverage',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '8',
            'sd_name' => 'Medic',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '9',
            'sd_name' => 'Under Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '9',
            'sd_name' => 'Assistance Under Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '9',
            'sd_name' => 'Public Relations',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '9',
            'sd_name' => 'Delegate Affairs',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '10',
            'sd_name' => 'Under Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '10',
            'sd_name' => 'Assistance Under Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '10',
            'sd_name' => 'Design',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '10',
            'sd_name' => 'Documentation',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '11',
            'sd_name' => 'Under Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '11',
            'sd_name' => 'Assistance Under Secretary General',
            'sd_description' => '-'
        ]);

        Subdivision::create([
            'divisions_id' => '11',
            'sd_name' => 'Member',
            'sd_description' => '-'
        ]);
    }
}
