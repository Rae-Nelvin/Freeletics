<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'Leonardo Wijaya',
            'email'=> 'leonardo.wijaya003@binus.ac.id',
            'password' => Hash::make('admin001'),
            'role' => 'Super Admin'
        ]);

        DB::table('users')->insert([
            'name'=> 'Wahyu Junior',
            'email'=> 'Wahyu.hidayat003@binus.ac.id',
            'password' => Hash::make('admin002'),
            'role' => 'Super Admin'
        ]);

        DB::table('users')->insert([
            'name'=> 'Rhemzy Putra',
            'email'=> 'rhemzy.maulana@binus.ac.id',
            'password' => Hash::make('admin003'),
            'role' => 'Super Admin'
        ]);
    }
}