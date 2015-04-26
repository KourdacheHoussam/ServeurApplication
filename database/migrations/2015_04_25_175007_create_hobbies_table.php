<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHobbiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
		//Create table hobbies 
		//The schema static component allow us to create
		//A database schema: the first param is the name
		//Of the table, the second param is an anonymous function
		//who's take Blueprint Component in order to deal directly
		//With Partie model and make CRUS ORM operations
		Schema::create('hobbies', function(Blueprint $table){			
			//creation d'une cle primaire
			$table->increments('id');
			//the name of the hobby
			$table->string('hobby_name', 30);
			//the hobby description
			$table->text('hobby_description')->nullable();
			// pour creer un champ memorisant la date de creation 
			// et de suppression
			$table->timestamps();

			//When User delete his account, all his Hobbies will be deleted
			$table->foreign('user_id')
				  ->references('id')
				  ->on('users')
				  ->onDelete('cascade');
		});
	}	

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down(){
			Schema::drop('hobbies');
	}

}
