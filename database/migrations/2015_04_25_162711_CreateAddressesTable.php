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
		Schema::create('Addresses', function(Blueprint $table){
			//default :une cle primaire	
			$table->increments('id');
			//The address of the party : nom de l'organisme
			$table->string('party_organisation_address', 120)->default("NONE");
			//The address of the party : Bloc 1, ETAGE 1 ..etc
			$table->string('party_dispatch_infos_address', 120)->default("NONE");
			//The address of the party : nom de la rue/avenue ...etc
			$table->string('party_road_address', 120);
			//The address of the party : code postal
			$table->string('party_cp_address', 120);
			//The address of the party : nom du pays
			$table->string('party_country_address', 120);
			//The address of the party : nom de la ville
			$table->string('party_city_address', 120);
			//The address of the party : other address specifications
			$table->string('party_other_address_specs', 100)->default("NONE");			
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
		Schema::drop('Addresses');
	}

}
