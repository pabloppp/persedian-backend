<?php
/**
 * Created by PhpStorm.
 * User: pablopernias
 * Date: 14/08/14
 * Time: 22:44
 */

class Log extends Eloquent{

    protected $table = 'logs';

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }

    public function inventory()
    {
        return $this->belongsTo('Inventory', 'inventory_id');
    }

    public function item()
    {
        return $this->belongsTo('Item', 'item_id');
    }

    public function postingLine()
    {
        return $this->hasOne('postingLine', 'log_id');
    }
} 