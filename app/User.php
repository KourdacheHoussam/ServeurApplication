<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

/**
 * A Model Class Of User: The ORM Schema Database associated to this Model is:
 * create_users_table.php
 *
 */
class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];
   
	/**
	 * Get the hobbies of the given user
	 * A user has a Hobby, and a Hobby can belong to many users
	 * @return Hobby
	 */
	public function hobbies(){
		//A user has a Hobby, and a Hobby can belong to many users
		return $this->blongToMany('Models\Hobby');
	}

	/**
	 * A User has Only One Addresse
	 * @return Addresse
	 */
	public function addresse(){
		return $this->hasOne('Models\Addresse');
	}

	
}
