<?php
/**
 * Created by PhpStorm.
 * User: pablopernias
 * Date: 14/08/14
 * Time: 23:00
 */

class UserSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            "email"=>"pablo@pernias.com",
            "password"=>Hash::make('aaa')

        ));

        User::create(array(
            "email"=>"roxannelopez6@hotmail.com",
            "password"=>Hash::make('aaa')
        ));

    }
} 