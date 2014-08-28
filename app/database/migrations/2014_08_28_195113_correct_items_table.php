<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CorrectItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('items', function(Blueprint $table)
        {
            $table->decimal('retail_price', 13, 4);
            $table->decimal('taxes', 13, 4)->nullable();
            $table->dropColumn('price');
            $table->integer('ordered');
            $table->integer('sold');
            $table->boolean('outdated')->default(false);
            $table->string('code_type',20);
            $table->dropColumn('discontinued');


        });

        Schema::table('items', function(Blueprint $table)
        {
            $table->boolean("discontinued")->default(false);
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('items', function(Blueprint $table)
        {
            $table->dropColumn('retail_price');
            $table->dropColumn('taxes');
            $table->decimal('price', 13, 4);
            $table->dropColumn('ordered');
            $table->dropColumn('sold');
            $table->dropColumn('outdated');
            $table->dropColumn('code_type');
            $table->dropColumn('discontinued');
        });

        Schema::table('items', function(Blueprint $table)
        {
            $table->boolean("discontinued");
        });
	}

}
