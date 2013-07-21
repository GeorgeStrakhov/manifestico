<?php

class ManifestoTagTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	DB::table('manifesto_tag')->delete();

    	//seeding the pivot table
        $manifesto_tag = array(
        	['tag_id'=>1, 'manifesto_id'=>1],
        	['tag_id'=>1, 'manifesto_id'=>2],
        	['tag_id'=>2, 'manifesto_id'=>2]
        );

        // Uncomment the below to run the seeder
        DB::table('manifesto_tag')->insert($manifesto_tag);
    }

}