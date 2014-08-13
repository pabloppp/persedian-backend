<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrenciesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('currencies', function(Blueprint $table)
        {
            //FIELDS
            $table->increments('id');
            $table->string('name', 60)->unique();
            $table->string('initials', 10)->unique();
            $table->string('symbol', 10)->unique();

        });

        Schema::table('inventories', function(Blueprint $table)
        {
            $table->integer('currency_id')->unsigned();
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade')->onUpdate('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('inventories', function(Blueprint $table)
        {
            $table->dropForeign('inventories_currency_id_foreign');
            $table->dropColumn('currency_id');
        });

        Schema::dropIfExists('currencies');
	}

}
