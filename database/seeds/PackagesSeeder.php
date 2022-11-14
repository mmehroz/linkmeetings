<?php

use Illuminate\Database\Seeder;

class PackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('packages')->truncate();
    	DB::table('packages_description')->truncate();

        DB::table('packages')->insert([
            'id'                        => '1',
			'type'                      => 'Hotel',
			'status'                    => 'Active',
			'week_deal_posting'         => '1',
			'email_blast'               => '1',
			'promo_article'             => '0',
			'landing_page_posting'      => '0',
			'price'                     => '5000',
            'created_by'                => '1',
		]);
        DB::table('packages')->insert([
            'id'                        => '2',
            'type'                      => 'Hotel',
            'status'                    => 'Active',
            'week_deal_posting'         => '1',
            'email_blast'               => '1',
            'promo_article'             => '1',
            'landing_page_posting'      => '1',
            'price'                     => '8000',
            'created_by'                => '1',
        ]);
        DB::table('packages')->insert([
            'id'                        => '3',
            'type'                      => 'Hotel',
            'status'                    => 'Active',
            'week_deal_posting'         => '3',
            'email_blast'               => '2',
            'promo_article'             => '1',
            'landing_page_posting'      => '2',
            'price'                     => '120000',
            'created_by'                => '1',
        ]);
        DB::table('packages')->insert([
            'id'                        => '4',
            'type'                      => 'DMC',
            'status'                    => 'Active',
            'week_deal_posting'         => '1',
            'email_blast'               => '1',
            'promo_article'             => '0',
            'landing_page_posting'      => '0',
            'price'                     => '5000',
            'created_by'                => '1',
        ]);
        DB::table('packages')->insert([
            'id'                        => '5',
            'type'                      => 'DMC',
            'status'                    => 'Active',
            'week_deal_posting'         => '1',
            'email_blast'               => '1',
            'promo_article'             => '1',
            'landing_page_posting'      => '1',
            'price'                     => '8000',
            'created_by'                => '1',
        ]);
        DB::table('packages')->insert([
            'id'                        => '6',
            'type'                      => 'DMC',
            'status'                    => 'Active',
            'week_deal_posting'         => '3',
            'email_blast'               => '2',
            'promo_article'             => '1',
            'landing_page_posting'      => '2',
            'price'                     => '12000',
            'created_by'                => '1',
        ]);


		DB::table('packages_description')->insert([
            'id'                 => '1',
			'package_id'         => '1',
			'language_id'        => '1',
            'title'              => 'PERL English',
            'short_title'        => 'Paquete Basico',
            'details'            => '<ul><li>Landing Page</li><li>1 Postings of deal of the week in destination landing page</li><li>1 time email blast a year</li></ul>',
		]);
        DB::table('packages_description')->insert([
        'id'                 => '2',
        'package_id'         => '1',
        'language_id'        => '2',
        'title'              => 'PERL Spanish',
        'short_title'        => 'Paquete Basico',
        'details'            => '<ul><li>Landing Page</li><li>1 Postings of deal of the week in destination landing page</li><li>1 time email blast a year</li></ul>',
        ]);
        DB::table('packages_description')->insert([
            'id'                 => '3',
            'package_id'         => '1',
            'language_id'        => '3',
            'title'              => 'PERL PORTUGUESE',
            'short_title'        => 'Paquete Basico',
            'details'            => '<ul><li>Landing Page</li><li>1 Postings of deal of the week in destination landing page</li><li>1 time email blast a year</li></ul>',
        ]);
        DB::table('packages_description')->insert([
            'id'                 => '4',
            'package_id'         => '2',
            'language_id'        => '1',
            'title'              => 'SAPHIRE English',
            'short_title'        => 'Paquete Intermedio',
            'details'            => '<ul><li>Landing Page</li><li>1 Postings of deal of the week in destination landing page</li><li>1 promo article in the blog</li><li>1 time email blast a year</li><li>1 postings on main landing page in one year</li></ul>',
        ]);
        DB::table('packages_description')->insert([
            'id'                 => '5',
            'package_id'         => '2',
            'language_id'        => '2',
            'title'              => 'SAPHIRE SPANISH',
            'short_title'        => 'Paquete Intermedio',
            'details'            => '<ul><li>Landing Page</li><li>1 Postings of deal of the week in destination landing page</li><li>1 promo article in the blog</li><li>1 time email blast a year</li><li>1 postings on main landing page in one year</li></ul>',
        ]);
        DB::table('packages_description')->insert([
            'id'                 => '6',
            'package_id'         => '2',
            'language_id'        => '3',
            'title'              => 'SAPHIRE PORTUGUESE',
            'short_title'        => 'Paquete Intermedio',
            'details'            => '<ul><li>Landing Page</li><li>1 Postings of deal of the week in destination landing page</li><li>1 promo article in the blog</li><li>1 time email blast a year</li><li>1 postings on main landing page in one year</li></ul>',
        ]);
        DB::table('packages_description')->insert([
            'id'                 => '7',
            'package_id'         => '3',
            'language_id'        => '1',
            'title'              => 'DIAMOND English',
            'short_title'        => 'Paquete Primium',
            'details'            => '<ul><li>Landing Page</li><li>1 Postings of deal of the week in destination landing page</li><li>1 promo article in the blog</li><li>1 time email blast a year</li><li>1 postings on main landing page in one year</li></ul>',
        ]);
        DB::table('packages_description')->insert([
            'id'                 => '8',
            'package_id'         => '3',
            'language_id'        => '2',
            'title'              => 'DIAMOND Spanish',
            'short_title'        => 'Paquete Primium',
            'details'            => '<ul><li>Landing Page</li><li>1 Postings of deal of the week in destination landing page</li><li>1 promo article in the blog</li><li>1 time email blast a year</li><li>1 postings on main landing page in one year</li></ul>',
        ]);
        DB::table('packages_description')->insert([
            'id'                 => '9',
            'package_id'         => '3',
            'language_id'        => '3',
            'title'              => 'DIAMOND PORTUGUESE',
            'short_title'        => 'Paquete Primium',
            'details'            => '<ul><li>Landing Page</li><li>1 Postings of deal of the week in destination landing page</li><li>1 promo article in the blog</li><li>1 time email blast a year</li><li>1 postings on main landing page in one year</li></ul>',
        ]);

        DB::table('packages_description')->insert([
            'id'                 => '10',
            'package_id'         => '4',
            'language_id'        => '1',
            'title'              => 'PERL English',
            'short_title'        => 'Paquete Basico',
            'details'            => '<ul><li>Landing Page</li><li>1 Postings of deal of the week in destination landing page</li><li>1 time email blast a year</li></ul>',
        ]);
        DB::table('packages_description')->insert([
            'id'                 => '11',
            'package_id'         => '4',
            'language_id'        => '2',
            'title'              => 'PERL Spanish',
            'short_title'        => 'Paquete Basico',
            'details'            => '<ul><li>Landing Page</li><li>1 Postings of deal of the week in destination landing page</li><li>1 time email blast a year</li></ul>',
        ]);
        DB::table('packages_description')->insert([
            'id'                 => '12',
            'package_id'         => '4',
            'language_id'        => '3',
            'title'              => 'PERL PORTUGUESE',
            'short_title'        => 'Paquete Basico',
            'details'            => '<ul><li>Landing Page</li><li>1 Postings of deal of the week in destination landing page</li><li>1 time email blast a year</li></ul>',
        ]);
        DB::table('packages_description')->insert([
            'id'                 => '13',
            'package_id'         => '5',
            'language_id'        => '1',
            'title'              => 'SAPHIRE English',
            'short_title'        => 'Paquete Intermedio',
            'details'            => '<ul><li>Landing Page</li><li>1 Postings of deal of the week in destination landing page</li><li>1 promo article in the blog</li><li>1 time email blast a year</li><li>1 postings on main landing page in one year</li></ul>',
        ]);
        DB::table('packages_description')->insert([
            'id'                 => '14',
            'package_id'         => '5',
            'language_id'        => '2',
            'title'              => 'SAPHIRE SPANISH',
            'short_title'        => 'Paquete Intermedio',
            'details'            => '<ul><li>Landing Page</li><li>1 Postings of deal of the week in destination landing page</li><li>1 promo article in the blog</li><li>1 time email blast a year</li><li>1 postings on main landing page in one year</li></ul>',
        ]);
        DB::table('packages_description')->insert([
            'id'                 => '15',
            'package_id'         => '5',
            'language_id'        => '3',
            'title'              => 'SAPHIRE PORTUGUESE',
            'short_title'        => 'Paquete Intermedio',
            'details'            => '<ul><li>Landing Page</li><li>1 Postings of deal of the week in destination landing page</li><li>1 promo article in the blog</li><li>1 time email blast a year</li><li>1 postings on main landing page in one year</li></ul>',
        ]);
        DB::table('packages_description')->insert([
            'id'                 => '16',
            'package_id'         => '6',
            'language_id'        => '1',
            'title'              => 'DIAMOND English',
            'short_title'        => 'Paquete Primium',
            'details'            => '<ul><li>Landing Page</li><li>3 Postings of deal of the week in destination landing page</li><li>1 promo article in the blog</li><li>2 time email blast a year</li><li>2 postings on main landing page in one year</li></ul>',
        ]);
        DB::table('packages_description')->insert([
            'id'                 => '17',
            'package_id'         => '6',
            'language_id'        => '2',
            'title'              => 'DIAMOND Spanish',
            'short_title'        => 'Paquete Primium',
            'details'            => '<ul><li>Landing Page</li><li>3 Postings of deal of the week in destination landing page</li><li>1 promo article in the blog</li><li>2 time email blast a year</li><li>2 postings on main landing page in one year</li></ul>',
        ]);
        DB::table('packages_description')->insert([
            'id'                 => '18',
            'package_id'         => '6',
            'language_id'        => '3',
            'title'              => 'DIAMOND PORTUGUESE',
            'short_title'        => 'Paquete Primium',
            'details'            => '<ul><li>Landing Page</li><li>3 Postings of deal of the week in destination landing page</li><li>1 promo article in the blog</li><li>2 time email blast a year</li><li>2 postings on main landing page in one year</li></ul>',
        ]);


    }
}
