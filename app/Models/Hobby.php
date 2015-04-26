<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * A Model Class Of Hobby: The ORM Schema Database associated to this Model is:
 * create_hobbies_table.php
 **/
class Hobby extends Model {

	//The Table storage of this Model
	public $table="hobbies";


	/**
	 * Get all users associated to the given Hobby
	 * @return Users
	 */
	public function users(){
		//A Hobby belong to a user , and a User can have  many hobbies		
		return $this->belongsToMany('Models\User'); 
	}

}
