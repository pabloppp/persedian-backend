<?php
/**
 * Created by PhpStorm.
 * User: pablopernias
 * Date: 14/08/14
 * Time: 23:08
 */

class InventorySeeder extends Seeder {

    public function run()
    {
        DB::table('inventories')->delete();

        $firstInventory = new Inventory(array(
            "name"=>"First_Sample_Inventory",
            "description"=>"...",
        ));

        $firstInventory->owner()->associate(User::first());
        $firstInventory->currency()->associate(Currency::where("initials","EUR")->first());
        $firstInventory->save();

        $secondInventory = new Inventory(array(
            "name"=>"Second_Sample_Inventory",
            "description"=>"...",
        ));

        $secondInventory->owner()->associate(User::all()[1]);
        $secondInventory->currency()->associate(Currency::where("initials","USD")->first());
        $secondInventory->save();

    }

} 