<?php
/**
 * Created by PhpStorm.
 * User: pablopernias
 * Date: 14/08/14
 * Time: 23:24
 */

class CollaboratorsSeeder extends Seeder{

    public function run()
    {
        DB::table('user_inventory_collaborates')->delete();

        Inventory::first()->collaborators()->attach(User::all()[1], array(
            "accepted" => true,
            "insert_item" => false,
            "update_item" => false,
            "delete_item" => false,
            "increase_item" => true,
            "sell_item" => true,
        ));

        Inventory::all()[1]->collaborators()->attach(User::first(), array(
            "accepted" => true,
            "insert_item" => true,
            "update_item" => true,
            "delete_item" => true,
            "increase_item" => true,
            "sell_item" => true,
        ));

    }

} 