<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$categories = ['Altro'];

    	foreach ($categories as $category) {
			DB::table('categories')->insert([
		        'name' => $category,
				'updated_at' => date('Y-m-d h:i:s'),
				'created_at' => date('Y-m-d h:i:s')		        		        
			]);			
        }
    }
}
