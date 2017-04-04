<?php

class GroupsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('groups')->delete();
        
		\DB::table('groups')->insert(array (
			0 => 
			array (
				'id' => '1',
				'name' => 'admin',
				'zhname' => '物资平台管理员',
				'permissions' => '{"admin":1,"user":1}',
				'created_at' => '2016-02-26 18:53:01',
				'updated_at' => '2016-02-26 18:53:01',
			),
			1 => 
			array (
				'id' => '2',
				'name' => 'user',
				'zhname' => '物资平台用户',
				'permissions' => '{"user":1}',
				'created_at' => '2016-02-26 18:53:01',
				'updated_at' => '2016-02-26 18:53:01',
			),
		));
	}

}
