<?php
/**
 * Created by PhpStorm.
 * User: pablopernias
 * Date: 14/08/14
 * Time: 22:48
 */

class CurrenciesSeeder extends Seeder{

    public function run()
    {
        DB::table('currencies')->delete();

        Currency::create(array(
            "name"=>"United States dollar",
            "initials"=>"USD",
            "symbol"=>"$"
        ));

        Currency::create(array(
            "name"=>"Euro",
            "initials"=>"EUR",
            "symbol"=>"€"
        ));

        Currency::create(array(
            "name"=>"British Pound",
            "initials"=>"GBP",
            "symbol"=>"£"
        ));
    }

} 