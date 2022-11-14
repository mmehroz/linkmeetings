<?php

use Illuminate\Database\Seeder;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('subscribers')->truncate();


        DB::table('subscribers')->insert([
            'id'             => '1',
			'email'           => 'info@link-meeting.com',
			'status'         => 'Active',
            'created_at'     => date('Y-m-d H:i:s'),
		]);
    }
}
