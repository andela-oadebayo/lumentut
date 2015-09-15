<?php

namespace App;

/**
 * Created by PhpStorm.
 * User: OluwadamilolaAdebayo
 * Date: 9/15/15
 * Time: 10:56 AM
 */

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected  $fillable = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function fellow(){
        return $this->hasOne('App\Fellow');
    }
}