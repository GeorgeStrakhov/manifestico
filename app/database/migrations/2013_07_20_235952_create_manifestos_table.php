<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateManifestosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manifestos', function(Blueprint $table) {
            $table->increments('id');
            $table->text('text');
			$table->string('signature')->nullable();
			$table->string('theme');
			$table->text('custom_css')->nullable();
			$table->string('custom_artwork')->nullable();
			$table->string('link')->nullable();
			$table->string('email')->nullable();
			$table->string('secret');
			$table->bigInteger('views');
			$table->integer('stars');
			$table->string('pic_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('manifestos');
    }

}
