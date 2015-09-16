<?php
/**
 * Created by PhpStorm.
 * User: OluwadamilolaAdebayo
 * Date: 9/15/15
 * Time: 4:50 PM
 */

namespace App\Transformers;


use App\Group;
use League\Fractal\TransformerAbstract;


class GroupTransformer extends  TransformerAbstract
{
    protected  $defaultIncludes = ['tutor'];

    public function transform(Group $group){
        return [
            'id'            => $group->id,
            'name'          => $group->name,
            'description'   => $group->description
        ];
    }

    public function includeTutor(Group $group){
        $tutor = $group->tutor;
        return $this->item($tutor, new TutorTransformer);
    }
}