<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('tasks')->delete();

    	$tasks = array(
    		array(
    			'user_id' => 1,
	            'title' => 'Laravel Project',
	            'progress' => false
    		),
    		array(
    			'user_id' => 1,
	            'title' => 'Cakephp Project',
	            'progress' => true
    		),
    		array(
    			'user_id' => 1,
	            'title' => 'Angular Project',
	            'progress' => false
    		),
    	);
        DB::table('tasks')->insert($tasks);
    }
}
