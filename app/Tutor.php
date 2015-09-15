<?php
/**
 * Created by PhpStorm.
 * User: OluwadamilolaAdebayo
 * Date: 9/15/15
 * Time: 12:04 PM
 */

namespace app;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $table = 'tutors';

    /**
     * @var array
     */
    protected $fillable = ['name', 'description'];

}