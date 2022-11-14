<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('menu')->truncate();
    	DB::table('menu_description')->truncate();

        DB::table('menu')->insert([
            'id'             => '1',
			'section'        => '1',
			'status'         => 'Active',
            'created_by'     => '1',
		]);
		DB::table('menu')->insert([
            'id'             => '2',
			'section'        => '1',
			'status'         => 'Active',
            'created_by'     => '1',
		]);
		DB::table('menu')->insert([
            'id'             => '3',
			'section'        => '1',
			'status'         => 'Active',
            'created_by'     => '1',
		]);
		DB::table('menu')->insert([
            'id'             => '4',
			'section'        => '1',
			'status'         => 'Active',
            'created_by'     => '1',
		]);
		DB::table('menu')->insert([
            'id'             => '5',
			'section'        => '1',
			'status'         => 'Active',
            'created_by'     => '1',
		]);
		DB::table('menu')->insert([
            'id'             => '6',
			'section'        => '1',
			'status'         => 'Active',
            'created_by'     => '1',
		]);
		DB::table('menu')->insert([
            'id'             => '7',
			'section'        => '1',
			'status'         => 'Active',
            'created_by'     => '1',
		]);
		DB::table('menu')->insert([
            'id'             => '8',
			'section'        => '1',
			'status'         => 'Active',
            'created_by'     => '1',
		]);
		DB::table('menu')->insert([
            'id'             => '9',
			'section'        => '4',
			'status'         => 'Active',
            'created_by'     => '1',
		]);
		DB::table('menu')->insert([
            'id'             => '10',
			'section'        => '4',
			'status'         => 'Active',
            'created_by'     => '1',
		]);
		DB::table('menu')->insert([
            'id'             => '11',
			'section'        => '4',
			'status'         => 'Active',
            'created_by'     => '1',
		]);
		DB::table('menu')->insert([
            'id'             => '12',
			'section'        => '4',
			'status'         => 'Active',
            'created_by'     => '1',
		]);
		DB::table('menu')->insert([
            'id'             => '13',
			'section'        => '4',
			'status'         => 'Active',
            'created_by'     => '1',
		]);
		DB::table('menu')->insert([
            'id'             => '14',
			'section'        => '4',
			'status'         => 'Active',
            'created_by'     => '1',
		]);
		DB::table('menu')->insert([
            'id'             => '15',
			'section'        => '3',
			'status'         => 'Active',
            'created_by'     => '1',
		]);
		DB::table('menu')->insert([
            'id'             => '16',
			'section'        => '3',
			'status'         => 'Active',
            'created_by'     => '1',
		]);
		DB::table('menu')->insert([
            'id'             => '17',
			'section'        => '3',
			'status'         => 'Active',
            'created_by'     => '1',
		]);
		DB::table('menu')->insert([
            'id'             => '18',
			'section'        => '3',
			'status'         => 'Active',
            'created_by'     => '1',
		]);
		DB::table('menu')->insert([
            'id'             => '19',
			'section'        => '5',
			'status'         => 'Active',
            'created_by'     => '1',
		]);
		DB::table('menu')->insert([
            'id'             => '20',
			'section'        => '5',
			'status'         => 'Active',
            'created_by'     => '1',
		]);
		DB::table('menu')->insert([
            'id'             => '21',
			'section'        => '5',
			'status'         => 'Active',
            'created_by'     => '1',
		]);

		DB::table('menu_description')->insert([
            'id'             => '1',
			'type'        	 => 'Page',
			'menu_id'        => '1',
            'language_id'    => '1',
            'page_id'        => '2',
			'title'          => 'Destinations',
		]);
        DB::table('menu_description')->insert([
            'id'             => '2',
			'type'        	 => 'Page',
			'menu_id'        => '1',
            'language_id'    => '2',
            'page_id'        => '2',
			'title'          => 'Destinations',
		]);
        DB::table('menu_description')->insert([
            'id'             => '3',
			'type'        	 => 'Page',
			'menu_id'        => '1',
            'language_id'    => '3',
            'page_id'        => '2',
			'title'          => 'Destinations',
		]);
        DB::table('menu_description')->insert([
            'id'             => '4',
			'type'        	 => 'Page',
			'menu_id'        => '2',
            'language_id'    => '1',
            'page_id'        => '3',
			'title'          => 'Promotions',
		]);
        DB::table('menu_description')->insert([
            'id'             => '5',
			'type'        	 => 'Page',
			'menu_id'        => '2',
            'language_id'    => '2',
            'page_id'        => '3',
			'title'          => 'Promotions',
		]);
        DB::table('menu_description')->insert([
            'id'             => '6',
			'type'        	 => 'Page',
			'menu_id'        => '2',
            'language_id'    => '3',
            'page_id'        => '3',
			'title'          => 'Promotions',
		]);
        DB::table('menu_description')->insert([
            'id'             => '7',
			'type'        	 => 'Page',
			'menu_id'        => '3',
            'language_id'    => '1',
            'page_id'        => '4',
			'title'          => 'Blog',
		]);
        DB::table('menu_description')->insert([
            'id'             => '8',
			'type'        	 => 'Page',
			'menu_id'        => '3',
            'language_id'    => '2',
            'page_id'        => '4',
			'title'          => 'Blog',
		]);
        DB::table('menu_description')->insert([
            'id'             => '9',
			'type'        	 => 'Page',
			'menu_id'        => '3',
            'language_id'    => '3',
            'page_id'        => '4',
			'title'          => 'Blog',
		]);
        DB::table('menu_description')->insert([
            'id'             => '10',
			'type'        	 => 'Page',
			'menu_id'        => '4',
            'language_id'    => '1',
            'page_id'        => '5',
			'title'          => 'Contact',
		]);
        DB::table('menu_description')->insert([
            'id'             => '11',
			'type'        	 => 'Page',
			'menu_id'        => '4',
            'language_id'    => '2',
            'page_id'        => '5',
			'title'          => 'Contact',
		]);
        DB::table('menu_description')->insert([
            'id'             => '12',
			'type'        	 => 'Page',
			'menu_id'        => '4',
            'language_id'    => '3',
            'page_id'        => '5',
			'title'          => 'Contact',
		]);
        DB::table('menu_description')->insert([
            'id'             => '13',
			'type'        	 => 'Page',
			'menu_id'        => '5',
            'language_id'    => '1',
            'page_id'        => '6',
			'title'          => 'List Your hotel',
		]);
        DB::table('menu_description')->insert([
            'id'             => '14',
			'type'        	 => 'Page',
			'menu_id'        => '5',
            'language_id'    => '2',
            'page_id'        => '6',
			'title'          => 'List Your hotel',
		]);
        DB::table('menu_description')->insert([
            'id'             => '15',
			'type'        	 => 'Page',
			'menu_id'        => '5',
            'language_id'    => '3',
            'page_id'        => '6',
			'title'          => 'List Your hotel',
		]);
        DB::table('menu_description')->insert([
            'id'             => '16',
			'type'        	 => 'Page',
			'menu_id'        => '6',
            'language_id'    => '1',
            'page_id'        => '7',
			'title'          => 'List Your DMC',
		]);
        DB::table('menu_description')->insert([
            'id'             => '17',
			'type'        	 => 'Page',
			'menu_id'        => '6',
            'language_id'    => '2',
            'page_id'        => '7',
			'title'          => 'List Your DMC',
		]);
        DB::table('menu_description')->insert([
            'id'             => '18',
			'type'        	 => 'Page',
			'menu_id'        => '6',
            'language_id'    => '3',
            'page_id'        => '7',
			'title'          => 'List Your DMC',
		]);
        DB::table('menu_description')->insert([
            'id'             => '19',
			'type'        	 => 'Page',
			'menu_id'        => '7',
            'language_id'    => '1',
            'page_id'        => '8',
			'title'          => 'Sign Up as Meeting Planner',
		]);
        DB::table('menu_description')->insert([
            'id'             => '20',
			'type'        	 => 'Page',
			'menu_id'        => '7',
            'language_id'    => '2',
            'page_id'        => '8',
			'title'          => 'Sign Up as Meeting Planner',
		]);
		DB::table('menu_description')->insert([
            'id'             => '21',
			'type'        	 => 'Page',
			'menu_id'        => '7',
            'language_id'    => '3',
            'page_id'        => '8',
			'title'          => 'Sign Up as Meeting Planner',
		]);
		DB::table('menu_description')->insert([
            'id'             => '22',
			'type'        	 => 'Page',
			'menu_id'        => '8',
            'language_id'    => '1',
            'page_id'        => '9',
			'title'          => 'Login',
		]);
        DB::table('menu_description')->insert([
            'id'             => '23',
			'type'        	 => 'Page',
			'menu_id'        => '8',
            'language_id'    => '2',
            'page_id'        => '9',
			'title'          => 'Login',
		]);
        DB::table('menu_description')->insert([
            'id'             => '24',
			'type'        	 => 'Page',
			'menu_id'        => '8',
            'language_id'    => '3',
            'page_id'        => '9',
			'title'          => 'Login',
		]);
        DB::table('menu_description')->insert([
            'id'             => '25',
			'type'        	 => 'Page',
			'menu_id'        => '9',
            'language_id'    => '1',
            'page_id'        => '2',
			'title'          => 'Destinations',
		]);
        DB::table('menu_description')->insert([
            'id'             => '26',
			'type'        	 => 'Page',
			'menu_id'        => '9',
            'language_id'    => '2',
            'page_id'        => '2',
			'title'          => 'Destinations',
		]);
        DB::table('menu_description')->insert([
            'id'             => '27',
			'type'        	 => 'Page',
			'menu_id'        => '9',
            'language_id'    => '3',
            'page_id'        => '2',
			'title'          => 'Destinations',
		]);
        DB::table('menu_description')->insert([
            'id'             => '28',
			'type'        	 => 'Page',
			'menu_id'        => '10',
            'language_id'    => '1',
            'page_id'        => '3',
			'title'          => 'Promotions',
		]);
        DB::table('menu_description')->insert([
            'id'             => '29',
			'type'        	 => 'Page',
			'menu_id'        => '10',
            'language_id'    => '2',
            'page_id'        => '3',
			'title'          => 'Promotions',
		]);
        DB::table('menu_description')->insert([
            'id'             => '30',
			'type'        	 => 'Page',
			'menu_id'        => '10',
            'language_id'    => '3',
            'page_id'        => '3',
			'title'          => 'Promotions',
		]);
        DB::table('menu_description')->insert([
            'id'             => '31',
			'type'        	 => 'Page',
			'menu_id'        => '11',
            'language_id'    => '1',
            'page_id'        => '4',
			'title'          => 'Blog',
		]);
        DB::table('menu_description')->insert([
            'id'             => '32',
			'type'        	 => 'Page',
			'menu_id'        => '11',
            'language_id'    => '2',
            'page_id'        => '4',
			'title'          => 'Blog',
		]);
        DB::table('menu_description')->insert([
            'id'             => '33',
			'type'        	 => 'Page',
			'menu_id'        => '11',
            'language_id'    => '3',
            'page_id'        => '4',
			'title'          => 'Blog',
		]);
        DB::table('menu_description')->insert([
            'id'             => '34',
			'type'        	 => 'Page',
			'menu_id'        => '12',
            'language_id'    => '1',
            'page_id'        => '5',
			'title'          => 'Contact',
		]);
        DB::table('menu_description')->insert([
            'id'             => '35',
			'type'        	 => 'Page',
			'menu_id'        => '12',
            'language_id'    => '2',
            'page_id'        => '5',
			'title'          => 'Contact',
		]);
        DB::table('menu_description')->insert([
            'id'             => '36',
			'type'        	 => 'Page',
			'menu_id'        => '12',
            'language_id'    => '3',
            'page_id'        => '5',
			'title'          => 'Contact',
		]);
        DB::table('menu_description')->insert([
            'id'             => '37',
			'type'        	 => 'Page',
			'menu_id'        => '13',
            'language_id'    => '1',
            'page_id'        => '10',
			'title'          => 'Sign Up',
		]);
        DB::table('menu_description')->insert([
            'id'             => '38',
			'type'        	 => 'Page',
			'menu_id'        => '13',
            'language_id'    => '2',
            'page_id'        => '10',
			'title'          => 'Sign Up',
		]);
        DB::table('menu_description')->insert([
            'id'             => '39',
			'type'        	 => 'Page',
			'menu_id'        => '13',
            'language_id'    => '3',
            'page_id'        => '10',
			'title'          => 'Sign Up',
		]);
        DB::table('menu_description')->insert([
            'id'             => '40',
			'type'        	 => 'Page',
			'menu_id'        => '14',
            'language_id'    => '1',
            'page_id'        => '9',
			'title'          => 'Login',
		]);
        DB::table('menu_description')->insert([
            'id'             => '41',
			'type'        	 => 'Page',
			'menu_id'        => '14',
            'language_id'    => '2',
            'page_id'        => '9',
			'title'          => 'Login',
		]);
		DB::table('menu_description')->insert([
            'id'             => '42',
			'type'        	 => 'Page',
			'menu_id'        => '14',
            'language_id'    => '3',
            'page_id'        => '9',
			'title'          => 'Login',
		]);
		DB::table('menu_description')->insert([
            'id'             => '43',
			'type'        	 => 'Page',
			'menu_id'        => '15',
            'language_id'    => '1',
            'page_id'        => '11',
			'title'          => 'FAQs',
		]);
        DB::table('menu_description')->insert([
            'id'             => '44',
			'type'        	 => 'Page',
			'menu_id'        => '15',
            'language_id'    => '2',
            'page_id'        => '11',
			'title'          => 'FAQs',
		]);
        DB::table('menu_description')->insert([
            'id'             => '45',
			'type'        	 => 'Page',
			'menu_id'        => '15',
            'language_id'    => '3',
            'page_id'        => '11',
			'title'          => 'FAQs',
		]);
        DB::table('menu_description')->insert([
            'id'             => '46',
			'type'        	 => 'Page',
			'menu_id'        => '16',
            'language_id'    => '1',
            'page_id'        => '12',
			'title'          => 'Privacy Policy',
		]);
        DB::table('menu_description')->insert([
            'id'             => '47',
			'type'        	 => 'Page',
			'menu_id'        => '16',
            'language_id'    => '2',
            'page_id'        => '12',
			'title'          => 'Privacy Policy',
		]);
        DB::table('menu_description')->insert([
            'id'             => '48',
			'type'        	 => 'Page',
			'menu_id'        => '16',
            'language_id'    => '3',
            'page_id'        => '12',
			'title'          => 'Privacy Policy',
		]);
        DB::table('menu_description')->insert([
            'id'             => '49',
			'type'        	 => 'Page',
			'menu_id'        => '17',
            'language_id'    => '1',
            'page_id'        => '13',
			'title'          => 'Cookie Policy',
		]);
        DB::table('menu_description')->insert([
            'id'             => '50',
			'type'        	 => 'Page',
			'menu_id'        => '17',
            'language_id'    => '2',
            'page_id'        => '13',
			'title'          => 'Cookie Policy',
		]);
        DB::table('menu_description')->insert([
            'id'             => '51',
			'type'        	 => 'Page',
			'menu_id'        => '17',
            'language_id'    => '3',
            'page_id'        => '13',
			'title'          => 'Cookie Policy',
		]);
        DB::table('menu_description')->insert([
            'id'             => '52',
			'type'        	 => 'Page',
			'menu_id'        => '18',
            'language_id'    => '1',
            'page_id'        => '14',
			'title'          => 'Terms & Conditions',
		]);
        DB::table('menu_description')->insert([
            'id'             => '53',
			'type'        	 => 'Page',
			'menu_id'        => '18',
            'language_id'    => '2',
            'page_id'        => '14',
			'title'          => 'Terms & Conditions',
		]);
        DB::table('menu_description')->insert([
            'id'             => '54',
			'type'        	 => 'Page',
			'menu_id'        => '18',
            'language_id'    => '3',
            'page_id'        => '14',
			'title'          => 'Terms & Conditions',
		]);
		DB::table('menu_description')->insert([
            'id'             => '55',
			'type'        	 => 'Page',
			'menu_id'        => '19',
            'language_id'    => '1',
            'page_id'        => '6',
			'title'          => 'List Your hotel',
		]);
		DB::table('menu_description')->insert([
            'id'             => '56',
			'type'        	 => 'Page',
			'menu_id'        => '19',
            'language_id'    => '2',
            'page_id'        => '6',
			'title'          => 'List Your hotel',
		]);
        DB::table('menu_description')->insert([
            'id'             => '57',
			'type'        	 => 'Page',
			'menu_id'        => '19',
            'language_id'    => '3',
            'page_id'        => '6',
			'title'          => 'List Your hotel',
		]);
        DB::table('menu_description')->insert([
            'id'             => '58',
			'type'        	 => 'Page',
			'menu_id'        => '20',
            'language_id'    => '1',
            'page_id'        => '7',
			'title'          => 'List Your DMC',
		]);
        DB::table('menu_description')->insert([
            'id'             => '59',
			'type'        	 => 'Page',
			'menu_id'        => '20',
            'language_id'    => '2',
            'page_id'        => '7',
			'title'          => 'List Your DMC',
		]);
        DB::table('menu_description')->insert([
            'id'             => '60',
			'type'        	 => 'Page',
			'menu_id'        => '20',
            'language_id'    => '3',
            'page_id'        => '7',
			'title'          => 'List Your DMC',
		]);
        DB::table('menu_description')->insert([
            'id'             => '61',
			'type'        	 => 'Page',
			'menu_id'        => '21',
            'language_id'    => '1',
            'page_id'        => '8',
			'title'          => 'Sign Up as Meeting Planner',
		]);
        DB::table('menu_description')->insert([
            'id'             => '62',
			'type'        	 => 'Page',
			'menu_id'        => '21',
            'language_id'    => '2',
            'page_id'        => '8',
			'title'          => 'Sign Up as Meeting Planner',
		]);
		DB::table('menu_description')->insert([
            'id'             => '63',
			'type'        	 => 'Page',
			'menu_id'        => '21',
            'language_id'    => '3',
            'page_id'        => '8',
			'title'          => 'Sign Up as Meeting Planner',
		]);
    }
}
