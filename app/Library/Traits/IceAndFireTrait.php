<?php

namespace App\Library\Traits;

use App\Http\Library\RestFullResponse\ApiResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;

trait IceAndFireTrait
{
    /**
     * @param $params
     * @return array|string
     */
    public function getWithFilter($params)
    {
        try {
            return (Http::get(config('services.iceAndFire.url') . $params))->json();
        } catch (\Exception $e) {
            return 'error getting book from external source';
        }
    }

}
