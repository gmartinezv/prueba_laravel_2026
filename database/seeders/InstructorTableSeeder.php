<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstructorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('instructor')->insert([
            'alguna_referencia' => 'profesion, curso que dicta , info',
            'user_id' => 1  ,
        ]);
         DB::table('instructor')->insert([
            'alguna_referencia' => 'datos de referencia del instructor',
            'user_id' => 2  ,
        ]);
    }
}
