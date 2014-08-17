<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('items', function(Blueprint $table)
        {
            //FIELDS
            $table->increments('id');
            $table->string('code',255);
            $table->string('name', 255);
            $table->string('description', 255);
            $table->integer('stock');
            $table->decimal('price', 13, 4);
            $table->longText('others', 255);
            $table->boolean('discontinued');
            $table->integer('inventory_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            //KEYS
            $table->foreign('inventory_id')->references('id')->on('inventories')->onDelete('cascade')->onUpdate('cascade');
            $table->unique(['name', 'inventory_id']);
            $table->unique(['code', 'inventory_id']);
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('items');
	}

}
