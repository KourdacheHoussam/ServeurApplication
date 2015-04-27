<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**
 * Schema de migration permettant de créer la table "hobby_user"
 * Cette classe permet de concrétiser la relation "Many-To-Many"
 * Entre la table "Users" et la table "Hobbies"
 * I-E : un utilisateur peut avoir plusieurs "hobbies" et un 
 * "Hobby" peut appartenir à plusieurs Utilisateurs.
 */
class CreateHobbyUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){		
		/*
		 * Creation Schema de la table de liaison (Many-To-Many)
		 * entre la tables Users et la table Hobbies.
		 * Un utilisateur peut avoir plusieurs Hobbies et 
		 * Hobby peut appartenir à plusieurs utilisateurs.
		 */

		Schema::create('hobby_user', function(Blueprint $table){
			$table->increments('id');
			//The Hobby ID attributes in table "hobby_user"
			$table->integer('hobby_id')->unsigned()->index();
			//The "hobby_id" his reference is the "id" of the hobby in table "hobbies"
			$table->foreign('hobby_id')->references('id')->on('hobbies')->onDelete('cascade');  

			//The User ID attribute in table "hobby_user"
			$table->integer('user_id')->unsigned()->index();	
			//Take his reference from "users" table.
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');  
			
			//save the date create/deletion of the row in table "hobby_user"
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down(){
		Schema::dropIfExists('hobby_user');
	}

}
