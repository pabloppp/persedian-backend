<?php
/**
 * Created by PhpStorm.
 * User: pablopernias
 * Date: 14/08/14
 * Time: 23:32
 */

class TagSeeder extends Seeder{

    public function run(){

        DB::table('tags')->delete();

        Tag::create(array(
            "tag"=>"alimento"
        ));
        Tag::create(array(
            "tag"=>"fruta"
        ));
        Tag::create(array(
            "tag"=>"ropa"
        ));
        Tag::create(array(
            "tag"=>"tecnologia"
        ));
        Tag::create(array(
            "tag"=>"arduino"
        ));

    }
} 