<?php
/**
 * Created by PhpStorm.
 * User: pablopernias
 * Date: 03/09/14
 * Time: 23:52
 */

class InventoryController extends Controller{

    protected $user;

    function __construct()
    {
        $this->user = Auth::user();
    }

    protected function getMine(){
        $response = $this->user->inventories_owned()->with(["currency"])->get();
        foreach($response as $inventory){
            $count = $inventory->items()->count();
            $inventory["count"] = $count;
        }
        return $response;
    }

    protected function getCollaborating(){
        $response = $this->user->inventories_collaborating()->with("currency")->get();
        return $response;
    }

    protected function delete($name){
        $response = $this->user->inventories_owned()->where("name",$name)->first();
        if($response){
            $response->delete();
            return Response::json("{'sucess':'200'}", 200);
        }
        else{
            return Response::json("{'error':'404'}", 404);
        }

    }

    protected function add(){
        try{
            $this->user->inventories_collaborating();
            $inventory = new Inventory();
            $inventory->owner()->associate($this->user);
            $currency = Currency::find(Input::json("currency_id"));
            $inventory->currency()->associate($currency);
            $inventory->name = Input::json("name");
            $inventory->description = Input::json("description");

            $inventory->save();

            return Response::json($inventory, 201);
        }catch(Exception $e){
            return Response::json("{'error':'400'}", 400);
        }

    }
}