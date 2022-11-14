<?php

use Illuminate\Database\Seeder;

class ActivationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('activations')->truncate();
        DB::table('activations')->insert([
            'id'             	=> '1',
			'user_id'       	=> '1',
			'code'         		=> 'XPZIplj6LW33gQwsQub5FAhZn5uGApt1',
            'completed'     	=> '1',
            'completed_at'      => date('Y-m-d H:i:s'),
		]);
    }
}
