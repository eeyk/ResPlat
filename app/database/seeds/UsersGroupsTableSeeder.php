<?php

class UsersGroupsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users_groups')->delete();
        
		\DB::table('users_groups')->insert(array (
			0 => 
			array (
				'user_id' => '2',
				'group_id' => '1',
			),
			1 => 
			array (
				'user_id' => '5',
				'group_id' => '2',
			),
			2 => 
			array (
				'user_id' => '6',
				'group_id' => '2',
			),
			3 => 
			array (
				'user_id' => '7',
				'group_id' => '2',
			),
			4 => 
			array (
				'user_id' => '8',
				'group_id' => '2',
			),
			5 => 
			array (
				'user_id' => '9',
				'group_id' => '2',
			),
			6 => 
			array (
				'user_id' => '10',
				'group_id' => '2',
			),
			7 => 
			array (
				'user_id' => '11',
				'group_id' => '2',
			),
			8 => 
			array (
				'user_id' => '12',
				'group_id' => '2',
			),
			9 => 
			array (
				'user_id' => '13',
				'group_id' => '2',
			),
			10 => 
			array (
				'user_id' => '14',
				'group_id' => '2',
			),
			11 => 
			array (
				'user_id' => '15',
				'group_id' => '2',
			),
			12 => 
			array (
				'user_id' => '16',
				'group_id' => '2',
			),
			13 => 
			array (
				'user_id' => '17',
				'group_id' => '2',
			),
			14 => 
			array (
				'user_id' => '18',
				'group_id' => '2',
			),
			15 => 
			array (
				'user_id' => '19',
				'group_id' => '2',
			),
			16 => 
			array (
				'user_id' => '20',
				'group_id' => '2',
			),
			17 => 
			array (
				'user_id' => '21',
				'group_id' => '2',
			),
			18 => 
			array (
				'user_id' => '22',
				'group_id' => '2',
			),
			19 => 
			array (
				'user_id' => '23',
				'group_id' => '2',
			),
			20 => 
			array (
				'user_id' => '24',
				'group_id' => '2',
			),
			21 => 
			array (
				'user_id' => '25',
				'group_id' => '2',
			),
			22 => 
			array (
				'user_id' => '26',
				'group_id' => '2',
			),
			23 => 
			array (
				'user_id' => '27',
				'group_id' => '2',
			),
			24 => 
			array (
				'user_id' => '28',
				'group_id' => '2',
			),
			25 => 
			array (
				'user_id' => '29',
				'group_id' => '2',
			),
			26 => 
			array (
				'user_id' => '30',
				'group_id' => '2',
			),
		));
	}

}
