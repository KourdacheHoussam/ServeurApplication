<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
		//Create table Users and his different attributes
		Schema::create('users', function(Blueprint $table){
			//default :une cle primaire			
			$table->increments('id');
			//user name
			$table->string('name');
			//user email is unique
			$table->string('email')->unique();
			//user password
			$table->string('password', 60);
			//user firstname
			$table->string('user_first_name', 35);
			//user lastname
			$table->string('user_last_name', 35);
			//user birthday
			$table->date('user_birthday');
			//user email address
			$table->string('user_email_address')->unique();
			//Foreign Column table : @Address reference
			$table->string('user_address')->unique();
			//user certified is an user with a ID CARD certified byUS			
			$table->boolean('user_certified');
			//A user can have "student" as status
			$table->string('user_social_status', 25);
			//The number of parties organized by the user
			$table->integer('user_nb_parties_organized');
			//the number of parties to which the user has participated
			$table->integer('user_nb_parties_participated');
			// **TEMPORATY** The friends List of the User
			$table->string('user_list_friends');
			// **TEMPORATY** The list of events organized by the User
			$table->string('user_parties_organized');
			// **TEMPORATY** The list of parties to which the User has participated
			$table->string('user_parties_participated');
			$table->rememberToken();
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
	public function down(){
		Schema::drop('users');
	}

}
