<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemItemRelated extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('item_item_related', function(Blueprint $table)
        {
            $table->integer('item_id')->unsigned();
            $table->integer('related_item_id')->unsigned();

            $table->primary(['item_id','related_item_id']);
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('related_item_id')->references('id')->on('items')->onDelete('cascade')->onUpdate('cascade');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('item_item_related');
	}

}
