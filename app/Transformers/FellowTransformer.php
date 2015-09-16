<?php
/**
 * Created by PhpStorm.
 * User: OluwadamilolaAdebayo
 * Date: 9/15/15
 * Time: 4:42 PM
 */

namespace App\Transformers;

use App\Fellow;
use League\Fractal\TransformerAbstract;


class FellowTransformer extends  TransformerAbstract
{
    protected  $defaultIncludes = ['groups'];

    public function transform(Fellow $fellow){
        return [
            'id'        => $fellow->id,
            'name'      => $fellow->name,
            'level'     => $fellow->level->name,
            'updated_at'=> $fellow->updated_at->format('F d, Y')
        ];
    }

    public function includeGroups(Fellow $fellow){
        $level = $fellow->group;
        return $this->item($level, new GroupTransformer);
    }
}