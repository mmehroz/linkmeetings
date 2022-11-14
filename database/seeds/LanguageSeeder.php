<?php

use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'name'          => 'English',
            'status'        => 'Active',
            'iso_639-1'     => 'en',
        ]);

        DB::table('languages')->insert([
            'name'          => 'Español (Spanish)',
            'status'        => 'Active',
            'iso_639-1'     => 'es',
        ]);
		DB::table('languages')->insert([
            'name'          => 'Português (Portuguese)',
            'status'        => 'Active',
            'iso_639-1'     => 'pt',
        ]);
        /*DB::table('languages')->insert([
            'name'          => 'Eλληνικά (Greek)',
            'status'        => 'Inactive',
            'iso_639-1'     => 'el',
        ]);

        DB::table('languages')->insert([
            'name'          => 'Français (French)',
            'status'        => 'Inactive',
            'iso_639-1'     => 'fr',
        ]);

        DB::table('languages')->insert([
            'name'          => 'Русский (Russian)',
            'status'        => 'Inactive',
            'iso_639-1'     => 'ru',
        ]);*/
    }
}
