<?php
/**
 * Created by PhpStorm.
 * User: OluwadamilolaAdebayo
 * Date: 9/15/15
 * Time: 4:59 PM
 */

namespace App\Http\Controllers;

use App\Fellow;
use App\Transformers\FellowTransformer;
use Illuminate\Http\Request;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class FellowsController extends ApiController
{
    protected $fellow;

    function __construct(Fellow $fellow){
        $this->fellow = $fellow;
    }

    /**
     * @param Manager $fractal
     * @param FellowTransformer $fellowTransformer
     * @return \Illuminate\Http\JsonResponse
     */

    public function index(Manager $fractal, FellowTransformer $fellowTransformer){
        $fellows = $this->fellow->with(['group.tutor'])->get();
        $collection = new Collection($fellows, $fellowTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }
}