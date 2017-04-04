<?php

class ApplicationMaterialTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('application_material')->delete();
        
		\DB::table('application_material')->insert(array (
			0 => 
			array (
				'id' => '1',
				'application_id' => '1',
				'material_id' => '1',
				'number' => '2',
				'comment' => '',
			),
			1 => 
			array (
				'id' => '2',
				'application_id' => '2',
				'material_id' => '4',
				'number' => '10',
				'comment' => '',
			),
			2 => 
			array (
				'id' => '3',
				'application_id' => '2',
				'material_id' => '67',
				'number' => '8',
				'comment' => '',
			),
			3 => 
			array (
				'id' => '4',
				'application_id' => '3',
				'material_id' => '2',
				'number' => '32',
				'comment' => '',
			),
			4 => 
			array (
				'id' => '5',
				'application_id' => '4',
				'material_id' => '4',
				'number' => '20',
				'comment' => '',
			),
			5 => 
			array (
				'id' => '6',
				'application_id' => '5',
				'material_id' => '64',
				'number' => '1',
				'comment' => '',
			),
			6 => 
			array (
				'id' => '7',
				'application_id' => '5',
				'material_id' => '66',
				'number' => '1',
				'comment' => '',
			),
			7 => 
			array (
				'id' => '8',
				'application_id' => '6',
				'material_id' => '1',
				'number' => '2',
				'comment' => '',
			),
			8 => 
			array (
				'id' => '9',
				'application_id' => '6',
				'material_id' => '4',
				'number' => '11',
				'comment' => '',
			),
			9 => 
			array (
				'id' => '10',
				'application_id' => '6',
				'material_id' => '6',
				'number' => '1',
				'comment' => '',
			),
			10 => 
			array (
				'id' => '11',
				'application_id' => '6',
				'material_id' => '16',
				'number' => '1',
				'comment' => '',
			),
			11 => 
			array (
				'id' => '12',
				'application_id' => '6',
				'material_id' => '41',
				'number' => '1',
				'comment' => '',
			),
			12 => 
			array (
				'id' => '13',
				'application_id' => '7',
				'material_id' => '6',
				'number' => '2',
				'comment' => '',
			),
			13 => 
			array (
				'id' => '14',
				'application_id' => '7',
				'material_id' => '11',
				'number' => '2',
				'comment' => '',
			),
			14 => 
			array (
				'id' => '15',
				'application_id' => '7',
				'material_id' => '15',
				'number' => '3',
				'comment' => '',
			),
			15 => 
			array (
				'id' => '16',
				'application_id' => '7',
				'material_id' => '16',
				'number' => '2',
				'comment' => '',
			),
			16 => 
			array (
				'id' => '17',
				'application_id' => '7',
				'material_id' => '18',
				'number' => '4',
				'comment' => '',
			),
			17 => 
			array (
				'id' => '18',
				'application_id' => '7',
				'material_id' => '63',
				'number' => '20',
				'comment' => '',
			),
			18 => 
			array (
				'id' => '19',
				'application_id' => '8',
				'material_id' => '1',
				'number' => '6',
				'comment' => '',
			),
			19 => 
			array (
				'id' => '20',
				'application_id' => '8',
				'material_id' => '6',
				'number' => '1',
				'comment' => '',
			),
			20 => 
			array (
				'id' => '21',
				'application_id' => '8',
				'material_id' => '16',
				'number' => '1',
				'comment' => '',
			),
			21 => 
			array (
				'id' => '22',
				'application_id' => '8',
				'material_id' => '18',
				'number' => '10',
				'comment' => '',
			),
			22 => 
			array (
				'id' => '23',
				'application_id' => '8',
				'material_id' => '70',
				'number' => '1',
				'comment' => '',
			),
			23 => 
			array (
				'id' => '24',
				'application_id' => '9',
				'material_id' => '15',
				'number' => '2',
				'comment' => '',
			),
			24 => 
			array (
				'id' => '25',
				'application_id' => '10',
				'material_id' => '8',
				'number' => '3',
				'comment' => '',
			),
			25 => 
			array (
				'id' => '26',
				'application_id' => '10',
				'material_id' => '16',
				'number' => '2',
				'comment' => '',
			),
			26 => 
			array (
				'id' => '27',
				'application_id' => '11',
				'material_id' => '64',
				'number' => '2',
				'comment' => '',
			),
			27 => 
			array (
				'id' => '28',
				'application_id' => '12',
				'material_id' => '63',
				'number' => '20',
				'comment' => '',
			),
			28 => 
			array (
				'id' => '29',
				'application_id' => '13',
				'material_id' => '68',
				'number' => '5',
				'comment' => '',
			),
			29 => 
			array (
				'id' => '30',
				'application_id' => '14',
				'material_id' => '54',
				'number' => '3',
				'comment' => '',
			),
			30 => 
			array (
				'id' => '31',
				'application_id' => '15',
				'material_id' => '5',
				'number' => '3',
				'comment' => '',
			),
			31 => 
			array (
				'id' => '32',
				'application_id' => '16',
				'material_id' => '70',
				'number' => '1',
				'comment' => '',
			),
			32 => 
			array (
				'id' => '33',
				'application_id' => '17',
				'material_id' => '1',
				'number' => '6',
				'comment' => '',
			),
			33 => 
			array (
				'id' => '34',
				'application_id' => '17',
				'material_id' => '8',
				'number' => '4',
				'comment' => '',
			),
			34 => 
			array (
				'id' => '35',
				'application_id' => '17',
				'material_id' => '11',
				'number' => '8',
				'comment' => '',
			),
			35 => 
			array (
				'id' => '36',
				'application_id' => '17',
				'material_id' => '14',
				'number' => '3',
				'comment' => '',
			),
			36 => 
			array (
				'id' => '37',
				'application_id' => '17',
				'material_id' => '15',
				'number' => '10',
				'comment' => '',
			),
			37 => 
			array (
				'id' => '38',
				'application_id' => '17',
				'material_id' => '16',
				'number' => '2',
				'comment' => '',
			),
			38 => 
			array (
				'id' => '39',
				'application_id' => '17',
				'material_id' => '21',
				'number' => '1',
				'comment' => '',
			),
			39 => 
			array (
				'id' => '40',
				'application_id' => '17',
				'material_id' => '23',
				'number' => '8',
				'comment' => '',
			),
			40 => 
			array (
				'id' => '41',
				'application_id' => '17',
				'material_id' => '24',
				'number' => '15',
				'comment' => '',
			),
			41 => 
			array (
				'id' => '42',
				'application_id' => '17',
				'material_id' => '28',
				'number' => '2',
				'comment' => '',
			),
			42 => 
			array (
				'id' => '43',
				'application_id' => '17',
				'material_id' => '51',
				'number' => '15',
				'comment' => '',
			),
			43 => 
			array (
				'id' => '44',
				'application_id' => '18',
				'material_id' => '47',
				'number' => '48',
				'comment' => '',
			),
			44 => 
			array (
				'id' => '45',
				'application_id' => '19',
				'material_id' => '4',
				'number' => '1',
				'comment' => '',
			),
			45 => 
			array (
				'id' => '46',
				'application_id' => '19',
				'material_id' => '5',
				'number' => '2',
				'comment' => '',
			),
			46 => 
			array (
				'id' => '47',
				'application_id' => '19',
				'material_id' => '64',
				'number' => '2',
				'comment' => '',
			),
			47 => 
			array (
				'id' => '48',
				'application_id' => '19',
				'material_id' => '65',
				'number' => '2',
				'comment' => '',
			),
			48 => 
			array (
				'id' => '49',
				'application_id' => '19',
				'material_id' => '70',
				'number' => '1',
				'comment' => '',
			),
			49 => 
			array (
				'id' => '50',
				'application_id' => '20',
				'material_id' => '63',
				'number' => '10',
				'comment' => '',
			),
		));
	}

}
