<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * A Model Class Of GIFT: The ORM Schema Database associated to this Model is:
 * create_gifts_table.php 
 * Ce model "Gift" représente ce que doivent apporter les gens qui sont acceptés
 * A une soirée: ça peut etre de l'argent, des boissons ou tout autres choses.
 */
class Gift extends Model {

	//The associated table for this Model 
	protected $table="gifts";
	

}
