<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
		Schema::create('addresses', function(Blueprint $table){
			//default :une cle primaire	
			$table->increments('id');
			//The Addresse ID attribute in table "addresses"
			$table->integer('user_id')->unsigned()->index();	
			//address belong to a user : there we add the foreign user_id Ref
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');  
			//The address of the party : nom de l'organisme
			$table->string('organisation_address', 120)->default("NONE");
			//The address of the party : Bloc 1, ETAGE 1 ..etc
			$table->string('dispatch_infos_address', 120)->default("NONE");
			//The address of the party : nom de la rue/avenue ...etc
			$table->string('road_address', 120);
			//The address of the party : code postal
			$table->string('cp_address', 120);
			//The address of the party : nom du pays
			$table->string('country_address', 120);
			//The address of the party : nom de la ville
			$table->string('city_address', 120);
			//The address of the party : other address specifications
			$table->string('other_address_specs', 120)->default("NONE");			
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
		Schema::dropIfExists('addresses');
	}

}
