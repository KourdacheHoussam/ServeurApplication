<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**
 * This Class Allow US to create  Parties Object transaction
 **/
class CreatePartiesTable extends Migration {

	/**
	 * Run the migrations.
	 * La fonction Up() Permet d'alle de l'avant
	 * @return void
	 */
	public function up(){
		//Create table parties 
		//The schema static component allow us to create
		//A database schema: the first param is the name
		//Of the table, the second param is an anonymous function
		//who's take Blueprint Component in order to deal directly
		//With Partie model and make CRUS ORM operations
		Schema::create('Parties', function(Blueprint $table){
			//creation d'une cle primaire
			$table->increments('id'); 
			//Le type de soirée: poker, dancing ...etc
			$table->string('party_type', 120);
			//The title of the party
			$table->string('party_title', 100);
			//Modalité soirée : soirée ouverte, soirée sur confirmation
			//Pour le moment:c'est sur confirmation
			$table->string('party_modality', 30);
			//The address of the party : nom de l'organisme
			$table->string('party_organisation_address', 120);
			//The address of the party : Bloc 1, ETAGE 1 ..etc
			$table->string('party_dispatch_infos_address', 120);
			//The address of the party : nom de la rue/avenue ...etc
			$table->string('party_road_address', 120);
			//The address of the party : code postal
			$table->string('party_cp_address', 120);
			//The address of the party : nom du pays
			$table->string('party_country_address', 120);
			//The address of the party : nom de la ville
			$table->string('party_city_address', 120);
			//The address of the party : other address specifications
			$table->string('party_other_address_specs', 100);
			//Le nombre minimum de participants
			$table->integer('party_mini_participants', false, false);
			//Le nombre maximal de participants
			$table->integer('party_maximal_participants', false, false);
			//Ce que doivent apporter les gens à la soirée
			$table->string('party_gifts', 120);
			// Date and time party start
			$table->dateTime('party_datetime_start');
			// Date and time party end
			$table->dateTime('party_datetime_end');
			// party type of place
			$table->string('party_place_type', 30);
			//Les commentaire de l'organisateur de la soirée
			$table->string('party_organisator_comments', 300);
			//Foregin : Collection of Users : La liste des participants
			$table->string('party_list_participants', 120);
			//Foreign Column TABLE => List of notices: persons who want give his notice about the party
			$table->string('party_list_notices');
			// pour creer un champ memorisant la date de creation 
			// et de suppression
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 * La fonction down() permet de revenir en arrière
	 * @return void
	 */
	public function down(){
		//Supprimer la table Parties
		Schema::drop('Parties');
	}

}
