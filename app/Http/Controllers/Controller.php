<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;

class Controller extends BaseController
{
    public function index(Request $request): JsonResponse
    {
        $data = [
            'message' => 'hello'
        ];
        return new JsonResponse($data);
    }
}
