<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotosSeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void 
     */
    public function run()
    {
        DB::table('photos')->insert([
            'title'=> 'Photos 1',
            'subtitle'=> 'Lorem ipsum dolor sit amet.',
            'event' => 'Author',
            'is_used' => '1',
            'author_id' => '1',
            'file_path' => ''
        ]);

        DB::table('photos')->insert([
            'title'=> 'Photos 2',
            'subtitle'=> 'Lorem ipsum dolor sit amet.',
            'event' => 'Author',
            'is_used' => '1',
            'author_id' => '1',
            'file_path' => ''
        ]);

        DB::table('photos')->insert([
            'title'=> 'Photos 3',
            'subtitle'=> 'Lorem ipsum dolor sit amet.',
            'event' => 'Author',
            'is_used' => '1',
            'author_id' => '1',
            'file_path' => ''
        ]);

        DB::table('photos')->insert([
            'title'=> 'Photos 4',
            'subtitle'=> 'Lorem ipsum dolor sit amet.',
            'event' => 'Author',
            'is_used' => '1',
            'author_id' => '1',
            'file_path' => ''
        ]);
    }
}
