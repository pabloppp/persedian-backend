<?php
/**
 * Created by PhpStorm.
 * User: pablopernias
 * Date: 14/08/14
 * Time: 21:42
 */

class Currency extends Eloquent{

    protected $table = 'currencies';
    protected $hidden = array('id');
    public $timestamps = false;

    public function inventories()
    {
        return $this->hasMany('Inventory', 'currency_id');
    }

} 