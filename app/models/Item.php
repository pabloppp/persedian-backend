<?php
/**
 * Created by PhpStorm.
 * User: pablopernias
 * Date: 14/08/14
 * Time: 22:13
 */

class Item extends Eloquent{

    use SoftDeletingTrait;

    protected $table = 'items';
    protected $hidden = array('id');
    protected $dates = ['deleted_at'];

    public function inventory()
    {
        return $this->belongsTo('Inventory', 'inventory_id');
    }

    public function related_items()
    {
        $relatedA = $this->belongsToMany('Item', 'item_item_related', 'item_id', 'related_item_id')->toArray();
        $relatedB = $this->belongsToMany('Item', 'item_item_related', 'related_item_id', 'item_id')->toArray();
        $related = array_merge($relatedA, $relatedB);
        $related = array_unique($related);
        return $related;

    }

    public function tags(){
        return $this->belongsToMany('Tag', 'item_tag');
    }

    public function scopeDiscontinued($query)
    {
        return $query->wherediscontinued(true);
    }

} 