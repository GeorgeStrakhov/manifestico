<?php

class TagsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	DB::table('tags')->delete();

        $tags = array(
        	['name'=>'art', 'slug'=>'art'],
        	['name'=>'love', 'slug'=>'love'],
        	['name'=>'education', 'slug'=>'education'],
        	['name'=>'star wars', 'slug'=>'star-wars']
        );

        // Uncomment the below to run the seeder
        DB::table('tags')->insert($tags);
    }

}