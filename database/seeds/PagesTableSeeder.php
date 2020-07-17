<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pages')->insert([
            ['name'=>'Home'],
            ['name' => 'Browse Jobs'],
            ['name' => 'Canditates'],
            ['name' => 'Blog'],
            ['name' => 'Contact'],
            ['name' => 'Login'],
            ['name' => 'Register'],
            ['name' => 'Post a Job'],
            ['name' => 'Want a Job']
        ]);
    }
}
