<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('inventories', function(Blueprint $table)
        {
            //FIELDS
            $table->increments('id');
            $table->string('name', 120)->unique();
            $table->string('description', 255);
            $table->integer('user_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            //KEYS
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('inventories');
	}

}
