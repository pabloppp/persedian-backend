<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostingLinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table("logs", function(Blueprint $table){
            $table->dropColumn('quantity');
        });

        Schema::create('posting_lines', function(Blueprint $table)
        {
            //FIELDS
            $table->increments('id');
            $table->integer("quantity")->default(1);
            $table->decimal('price', 13, 4);
            $table->decimal('vat', 13, 4);
            $table->decimal('other_taxes', 13, 4);
            $table->string("info",255)->nullable();
            $table->integer('log_id')->unsigned()->unique()->nullable();
            $table->timestamps();

            $table->foreign('log_id')->references('id')->on('logs')->onDelete('cascade')->onUpdate('cascade');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::table("logs", function(Blueprint $table){
            $table->integer("quantity")->nullable();
        });

        Schema::dropIfExists('posting_lines');
	}

}
