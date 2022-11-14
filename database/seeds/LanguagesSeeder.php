<?php

use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('languages')->truncate();
    	DB::table('languages')->insert([
            'id'            => '1',
			'name'       	=> 'English',
			'status'        => 'Active',
            'iso_639-1'     => 'en',
        ]);
        DB::table('languages')->insert([
            'id'            => '2',
			'name'       	=> 'Español (Spanish)',
			'status'        => 'Active',
            'iso_639-1'     => 'es',
        ]);
        DB::table('languages')->insert([
            'id'            => '3',
			'name'       	=> 'Português (Portuguese)',
			'status'        => 'Active',
            'iso_639-1'     => 'pt',
        ]);
    }
}
