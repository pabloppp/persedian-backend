<?php
/**
 * Created by PhpStorm.
 * User: pablopernias
 * Date: 14/08/14
 * Time: 21:26
 */

class Inventory extends Eloquent {

    use SoftDeletingTrait;

    protected $table = 'inventories';
    protected $hidden = array('id','user_id', 'currency_id', 'deleted_at');
    protected $dates = ['deleted_at'];
    //protected $appends = array('item');

    public function currency()
    {
        return $this->belongsTo('Currency', 'currency_id');
    }

    public function owner()
    {
        return $this->belongsTo('User', 'user_id');
    }

    public function collaborators(){
        return $this->belongsToMany('User', 'user_inventory_collaborates')
            ->withPivot("accepted","insert_item","delete_item","update_item","increase_item","sell_item");
    }

    public function items()
    {
        return $this->hasMany('Item', 'inventory_id');
    }

} 