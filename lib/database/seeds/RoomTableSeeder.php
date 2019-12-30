<?php

use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
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
    		'room_id' =>'1010',
    		'room_name'=>'101G2',
        ], 
        [
        	'room_id' =>'1020',
    		'room_name'=>'102G2',
    	],
    	[
        	'room_id' =>'1030',
    		'room_name'=>'103G2',
    	],
    	[
        	'room_id' =>'1040',
    		'room_name'=>'104G2',
    	],
    	[
        	'room_id' =>'1050',
    		'room_name'=>'105G2',
    	],
    	[
        	'room_id' =>'1060',
    		'room_name'=>'106G2',
    	],
    	[
        	'room_id' =>'1070',
    		'room_name'=>'107G2',
    	],
    	[
        	'room_id' =>'1080',
    		'room_name'=>'108G2',
    	],
    	[
        	'room_id' =>'1090',
    		'room_name'=>'109G2',
    	],
    ];
    DB::table('db_room')->insert($data);	
	}
}
