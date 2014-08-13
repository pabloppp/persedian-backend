<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('logs', function(Blueprint $table)
        {
            //FIELDS
            $table->increments('id');
            $table->enum('action', array('insert', 'remove', 'update', 'increment', 'sell'));
            $table->integer("quantity")->nullable();
            $table->string("info",255)->nullable();
            $table->integer("user_id")->unsigned()->nullable();
            $table->integer("inventory_id")->unsigned()->nullable();
            $table->integer("item_id")->unsigned()->nullable();
            $table->timestamps();

            //KEYS
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('inventory_id')->references('id')->on('inventories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade')->onUpdate('cascade');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('logs');
	}

}
