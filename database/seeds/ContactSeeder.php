<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('contact')->truncate();
        DB::table('contact')->insert([
            'id'             	=> '1',
			'first_name'        => 'First Name',
			'last_name'         => 'LastName',
            'email_address'     => 'Email@gmail.com',
            'phone_number'      => 'Phone',
			'company'           => 'Company',
			'subject'           => 'Subject',
            'message'    		=> 'Message',
        ]);
        DB::table('contact')->insert([
            'id'             	=> '2',
			'first_name'        => 'First Name',
			'last_name'         => 'LastName',
            'email_address'     => 'Email@gmail.com',
            'phone_number'      => 'Phone',
			'company'           => 'Company',
			'subject'           => 'Subject',
            'message'    		=> 'Message',
        ]);
    }
}
