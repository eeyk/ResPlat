<?php

class CategoryTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('category')->delete();

		\DB::table('category')->insert(array (
			0 =>
			array (
				'id' => '1',
				'name' => '文具类',

				'created_at' => '2016-03-02 21:35:12',
				'updated_at' => '2016-03-02 21:35:12',
			),
			1 =>
			array (
				'id' => '2',
				'name' => '文件类',

				'created_at' => '2016-03-12 21:25:08',
				'updated_at' => '2016-03-12 21:25:08',
			),
			2 =>
			array (
				'id' => '3',
				'name' => '文体类',

				'created_at' => '2016-03-12 21:25:35',
				'updated_at' => '2016-03-12 21:25:35',
			),
			3 =>
			array (
				'id' => '4',
				'name' => '生活类',

				'created_at' => '2016-03-12 21:25:48',
				'updated_at' => '2016-03-12 21:25:48',
			),
			4 =>
			array (
				'id' => '6',
				'name' => '电子设备',

				'created_at' => '2016-03-12 21:27:31',
				'updated_at' => '2016-03-12 21:27:31',
			),
			5 =>
			array (
				'id' => '7',
				'name' => '贵重物品',

				'created_at' => '2016-03-12 21:27:41',
				'updated_at' => '2016-03-12 21:27:41',
			),
			6 =>
			array (
				'id' => '8',
				'name' => '其他',

				'created_at' => '2016-03-12 21:29:48',
				'updated_at' => '2016-03-12 21:29:48',
			),
		));
	}

}
