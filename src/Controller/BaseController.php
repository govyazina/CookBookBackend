<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class BaseController
{
    #[Route('/')]
    public function get(): JsonResponse
    {
        return new JsonResponse('{}', json: true);
    }
}
