<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

    	$this->call('ApplicationTableSeeder');
		$this->call('ApplicationMaterialTableSeeder');
		$this->call('CategoryTableSeeder');
		$this->call('GroupsTableSeeder');
		$this->call('MaterialTableSeeder');
		$this->call('MigrationsTableSeeder');
		$this->call('ThrottleTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('UsersGroupsTableSeeder');
		$this->call('WorkroomTableSeeder');
	}

}
