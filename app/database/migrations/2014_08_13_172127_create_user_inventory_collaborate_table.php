<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInventoryCollaborateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('user_inventory_collaborates', function(Blueprint $table)
        {

            $table->integer('user_id')->unsigned();
            $table->integer('inventory_id')->unsigned();

            $table->boolean('accepted');
            $table->boolean('insert_item');
            $table->boolean('delete_item');
            $table->boolean('update_item');
            $table->boolean('increase_item');
            $table->boolean('sell_item');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('inventory_id')->references('id')->on('inventories')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['user_id', 'inventory_id']);


        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('user_inventory_collaborates');
	}

}
