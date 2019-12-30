<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
    	[	
    		'id' =>'17021312',
    		'password'=>bcrypt('12345@'),
    		'name'=>'Admin',
    		'level'=> 2
        ], 
        [
        'id' =>'17021313',
    		'password'=>bcrypt('12345@'),
    		'name'=>'Admin',
    		'level'=>2
    	],
    ];
    DB::table('users')->insert($data);	
    }
}
