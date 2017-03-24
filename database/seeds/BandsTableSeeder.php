<?php

use Illuminate\Database\Seeder;

class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bands')->delete();

        DB::table('bands')->insert([
            ['name' => 'Black Sabbath', 'start_date' => '1968-10-01', 'website' => 'http://www.blacksabbath.com/', 'still_active' => 0, 'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Megadeth', 'start_date' => '1983-08-10', 'website' => 'https://www.megadeth.com/', 'still_active' => 1, 'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Nonpoint', 'start_date' => '1997-03-10', 'website' => 'http://nonpoint.com/', 'still_active' => 1, 'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')]
        ]);
    }
}
