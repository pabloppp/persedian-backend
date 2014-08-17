<?php
/**
 * Created by PhpStorm.
 * User: pablopernias
 * Date: 14/08/14
 * Time: 23:44
 */

class ItemSeeder extends Seeder{

    public function run(){
        DB::table('items')->delete();

        $inventory1 = Inventory::first();
        $inventory2 = Inventory::all()[1];

        $item1 = new Item(array(
            "code"=>"8401234567890",
            "name"=>"Patatas sexys",
            "description"=>"...",
            "stock"=>0,
            "price"=>23.5,
            "others"=>"",
            "discontinued"=>false
        ));

        $inventory1->items()->save($item1);

        $item2 = new Item(array(
            "code"=>"8401234567891",
            "name"=>"Flores_silvestres",
            "description"=>"...",
            "stock"=>0,
            "price"=>23.5,
            "others"=>"",
            "discontinued"=>false
        ));

        $inventory1->items()->save($item2);

        $item3 = new Item(array(
            "code"=>"8401234567892",
            "name"=>"Ropa vieja",
            "description"=>"...",
            "stock"=>0,
            "price"=>23.5,
            "others"=>"",
            "discontinued"=>false
        ));

        $inventory2->items()->save($item1);

        $inventory2->items()->save($item3);

        //TAGS

        $tagRopa = Tag::where("tag","ropa")->first();
        $tagFruta = Tag::where("tag","fruta")->first();
        $tagArduino = Tag::where("tag","arduino")->first();

        $item1->tags()->attach($tagRopa);
        $item1->tags()->attach($tagArduino);
        $item2->tags()->attach($tagFruta);
        $item3->tags()->attach($tagRopa);
        $item3->tags()->attach($tagFruta);

    }
} 