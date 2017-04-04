<?php

class MigrationsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('migrations')->delete();
        
		\DB::table('migrations')->insert(array (
			0 => 
			array (
				'migration' => '2012_12_06_225921_migration_cartalyst_sentry_install_users',
				'batch' => '1',
			),
			1 => 
			array (
				'migration' => '2012_12_06_225929_migration_cartalyst_sentry_install_groups',
				'batch' => '1',
			),
			2 => 
			array (
				'migration' => '2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot',
				'batch' => '1',
			),
			3 => 
			array (
				'migration' => '2012_12_06_225988_migration_cartalyst_sentry_install_throttle',
				'batch' => '1',
			),
			4 => 
			array (
				'migration' => '2015_01_20_180255_create_material_table',
				'batch' => '1',
			),
			5 => 
			array (
				'migration' => '2015_01_20_183445_create_category_table',
				'batch' => '1',
			),
			6 => 
			array (
				'migration' => '2015_01_20_183845_create_material_category_table',
				'batch' => '1',
			),
			7 => 
			array (
				'migration' => '2015_01_23_053146_create_application_table',
				'batch' => '1',
			),
			8 => 
			array (
				'migration' => '2015_01_23_055558_create_application_material_table',
				'batch' => '1',
			),
			9 => 
			array (
				'migration' => '2015_01_26_045333_create_workroom_table',
				'batch' => '1',
			),
		));
	}

}
