<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Fact;
use App\Models\Security;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;

class Controller extends BaseController
{
    public function index(Request $request): JsonResponse
    {
        $expression = $request->get('expression');
        $security = $this->getSecurityBySymbol($request->get('security'));
        try {
            $result = $this->processExpression($expression, $security);
        } catch (\Exception $exception) {
            die('here');
        }
        return new JsonResponse($result);
    }

    private function getSecurityBySymbol(string $symbol): Security
    {
        return Security::firstWhere('symbol', '=', $symbol);
    }

    private function getAttributeByName(string $name)
    {
        return Attribute::firstWhere('name', '=', $name);
    }

    private function getFactValueByAttributeAndSecurity(Attribute $attribute, Security $security): float
    {
        $fact = Fact::where([
            ['attribute_id', '=',  $attribute->getId()],
            ['security_id', '=', $security->getId()],
        ])->first();

        return $fact->getValue();
    }

    private function processExpression(array $expression, Security $security): float
    {
        // Get function
        switch ($expression['fn']) {
            case "*":
                $function = function ($a, $b) {
                    return $a * $b;
                };
                break;
            default:
            case "+":
                $function = function ($a, $b) {
                    return $a + $b;
                };
                break;
        }


        // if params are strings get the Attribute otherwise return int
        $parameter1 = $this->processAttribute($expression['a'], $security);
        $parameter2 = $this->processAttribute($expression['b'], $security);

        $parameter1 = $parameter1 instanceof Attribute
            ? $this->getFactValueByAttributeAndSecurity($parameter1, $security)
            : $parameter1;

        $parameter2 = $parameter2 instanceof Attribute
            ? $this->getFactValueByAttributeAndSecurity($parameter2, $security)
            : $parameter2;

        return $function($parameter1, $parameter2);

    }

    private function processAttribute(string|float|array $attribute, Security $security): Attribute|float
    {
        switch (gettype($attribute)) {
            case 'array':
                return $this->processExpression($attribute, $security);
            case 'double':
                return $attribute;
            default:
            case 'string':
                return $this->getAttributeByName($attribute);
        }
    }
}
