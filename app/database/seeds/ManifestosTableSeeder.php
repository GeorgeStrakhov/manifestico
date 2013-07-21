<?php

class ManifestosTableSeeder extends Seeder {

    public function run()
    {
    	DB::table('manifestos')->delete();

        $manifestos = array(
        	[
        		'text'		=> 'I find your lack of faith\ndisturbing',
        		'signature'	=> 'Darth'
        	],
        	[
        		'text'		=> 'do\nthere is no try',
        		'signature' => 'Master Yoda'
        	]
        );

        DB::table('manifestos')->insert($manifestos);
    }

}