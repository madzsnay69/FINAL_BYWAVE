<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = array (
        	array(
        		'id' => 1,
        		'name' => 'admin',
        		'email' => 'admin@email.com',
        		'password' => bcrypt('123456'),
        		'role' => 'admin',
        		'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        		'updated_at'=> Carbon::now()->format('Y-m-d H:i:s')
        		)
        	);
        DB::table('users')->insert($data);
    }
}
