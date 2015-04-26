<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
		Schema::create('pictures', function(Blueprint $table){
				//default :une cle primaire	
			$table->increments('id');
			//The user's picture description
			$table->text('pic_description');
			//The relative address of the picture
			$table->string('pic_address');
			//A picture belong to a defined user id
			$table->string('user_pic_belong');
			//picture accepted/certified ?
			$table->boolean('pic_certified');
			// pour creer un champ memorisant la date de creation 
			// et de suppression
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
		Schema::dropIfExists('pictures');
	}

}
