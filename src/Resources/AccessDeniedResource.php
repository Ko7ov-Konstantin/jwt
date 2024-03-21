<?php

namespace Konstantinkotov\jwt\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class AccessDeniedResource extends JsonResource
{
    public static $wrap = null;
    public function toArray(Request $request) : array
    {
        return [
            'error' => 'Unauthorized'
        ];
    }

    public function withResponse(Request $request, JsonResponse $response)
    {
        $response->setStatusCode(ResponseAlias::HTTP_UNAUTHORIZED);
    }
}