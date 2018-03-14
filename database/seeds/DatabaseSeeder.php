<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('pictures')->insert([
            'title' => 'Winter Crown',
            'url' => 'http://www.jennifer-anderson.co.uk/uploads/1/3/1/9/13191095/7623689_orig.jpg',
            'width' => '100',
            'height' => '100',
            'date_created' => Carbon::parse('January 16th 2018')
        ]);
    }
}
