<?php
/**
 * Created by PhpStorm.
 * User: pablopernias
 * Date: 16/08/14
 * Time: 00:48
 */

class postingLine extends Eloquent{

    protected $table = 'posting_lines';

    public function user()
    {
        return $this->belongsTo('Log','log_id');
    }

} 