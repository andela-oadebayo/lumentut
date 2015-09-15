<?php
/**
 * Created by PhpStorm.
 * User: OluwadamilolaAdebayo
 * Date: 9/15/15
 * Time: 11:22 AM
 */

namespace app;
use Illuminate\Database\Eloquent\Model;


class Group extends Model
{
    /**
     * @var array
     */

    protected $fillable = ['name', 'description'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tutor(){
        return $this->hasOne('App\Tutor');
    }
}