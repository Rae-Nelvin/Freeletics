<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('captions')->insert([
           'author_id' => 1,
           'captions' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam cumque suscipit dolorem reprehenderit dolore expedita ullam sint hic exercitationem adipisci magnam, itaque eum animi odit sit dolorum illo quam dignissimos!',
           'event' => 'Funrun'
        ]);
        DB::table('captions')->insert([
            'author_id' => 1,
            'captions' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam cumque suscipit dolorem reprehenderit dolore expedita ullam sint hic exercitationem adipisci magnam, itaque eum animi odit sit dolorum illo quam dignissimos!',
            'event' => 'Weeks12'
         ]);
    }
}
