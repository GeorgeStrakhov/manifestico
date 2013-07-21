<?php

class ManifestosTableSeeder extends Seeder {

    public function run()
    {
    	DB::table('manifestos')->delete();

        $manifestos = array(
        	[
        		'name'      => 'lack of faith',
                'slug'      => 'lack-of-faith',
                'text'		=> 'I find your lack of faith\ndisturbing',
        		'signature'	=> 'Darth'
        	],
        	[
        		'name'      => 'do no try',
                'slug'      => 'do-no-try',
                'text'		=> 'do\nthere is no try',
        		'signature' => 'Master Yoda'
        	]
        );

        DB::table('manifestos')->insert($manifestos);
    }

}