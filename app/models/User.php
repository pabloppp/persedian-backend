<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('id', 'password', 'remember_token');

    public function inventories_owned()
    {
        return $this->hasMany('Inventory', 'user_id');
    }

    public function inventories_collaborating(){
        return $this->belongsToMany('Inventory', 'user_inventory_collaborates')
            ->withPivot("accepted","insert_item","delete_item","update_item","increase_item","sell_item");
    }

}
