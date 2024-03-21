<?php

namespace Konstantinkotov\jwt\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AccessAllowedResource extends JsonResource
{
    public function toArray(Request $request)
    {
        self::withoutWrapping();
        return [
            'token' => $this->resource,
            'request_type' => 'bearer'
        ];
    }
}