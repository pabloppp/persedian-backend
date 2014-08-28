<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOptionalUserData extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('users', function(Blueprint $table)
        {
            $table->string('phone', 20)->nullable()->unique();
            $table->boolean('phone_confirmed')->default(false);
            $table->string('avatar', 255)->nullable();
            $table->string('real_name', 255)->nullable();

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('users', function(Blueprint $table)
        {
            $table->dropColumn('phone');
            $table->dropColumn('phone_confirmed');
            $table->dropColumn('avatar');
            $table->dropColumn('real_name');
        });
	}

}
