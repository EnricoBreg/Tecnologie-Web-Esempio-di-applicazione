<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
	        'name' 			=> 'Giacomo',
	        'surname' 		=> 'Piva',
	        'email' 		=> 'giacomo@blackbeard.com',
	        'password' 		=> bcrypt('password'),
	        'color' 		=> '#3498DB',
	        'updated_at' 	=> date('Y-m-d h:i:s'),
			'created_at' 	=> date('Y-m-d h:i:s')		        
		], [
	        'name' 			=> 'Micael',
	        'surname' 		=> 'Ruffini',
	        'email' 		=> 'micael@blackbeard.com',
	        'password' 		=> bcrypt('password'),
	        'color' 		=> '#F7464A',	        
	        'updated_at' 	=> date('Y-m-d h:i:s'),
			'created_at' 	=> date('Y-m-d h:i:s')		        
		], [
	        'name' 			=> 'Paolo',
	        'surname' 		=> 'Fusatti',
	        'email' 		=> 'paolo@blackbeard.com',
	        'password' 		=> bcrypt('password'),
	        'color' 		=> '#46BFBD',	        
	        'updated_at' 	=> date('Y-m-d h:i:s'),
			'created_at' 	=> date('Y-m-d h:i:s')		        
		]]);
    }
}
