<?php
/**
 * Created by PhpStorm.
 * User: OluwadamilolaAdebayo
 * Date: 9/15/15
 * Time: 4:55 PM
 */

namespace app\Transformers;


use App\Tutor;
use League\Fractal\TransformerAbstract;


class TutorTransformer extends  TransformerAbstract
{

    public function transform(Tutor $tutor){
        return [
            'id'            => $tutor->id,
            'name'          => $tutor->name,
            'speciality'    => $tutor->speciality,
            'description'   => $tutor->description
        ];
    }
}