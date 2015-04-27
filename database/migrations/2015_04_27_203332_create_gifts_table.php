<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**
 * Create the table gifts schema and associate it to the Eloquent model Gift 
 **/
class CreateGiftsTable extends Migration {
	/**
	 * Run the migrations.
	 * @return void
	 */
	public function up() {
		Schema::create('gifts', function(Blueprint $table){
			//Autoincrement element row identifier		
			$table->increments('id');
			$table->string('gift_name');
			$table->string('gift_type')->nullable();
			$table->double('gift_price', 15, 8)->unsigned();
			$table->integer('gift_owner')->unsigned()->index();
			$table->foreign('gift_owner')->references('id')->on('users')->onDelete('cascade');
			$table->integer('gift_associated_party')->unsigned()->index();
			$table->foreign('gift_associated_party')->references('id')->on('parties')->onDelete('cascade');
			
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 * @return void
	 */
	public function down(){
		Schema::drop('gifts');
	}

}
