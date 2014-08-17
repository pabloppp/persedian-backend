<?php
/**
 * Created by PhpStorm.
 * User: pablopernias
 * Date: 14/08/14
 * Time: 22:37
 */

class Tag extends Eloquent{

    protected $table = 'tags';
    protected $hidden = array('id');
    public $timestamps = false;

    public function items(){
        return $this->belongsToMany('Item', 'item_tag');
    }

} 