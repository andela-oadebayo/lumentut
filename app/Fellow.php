<?php
/**
 * Created by PhpStorm.
 * User: OluwadamilolaAdebayo
 * Date: 9/15/15
 * Time: 11:15 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fellow extends Model
{
    /**
     * @var array
     */

    protected $fillable = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pdgroup(){
        return $this->hasOne('App\Pdgroups');
    }

}