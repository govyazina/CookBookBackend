<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

// Api Mock
final class AuthController
{
    #[Route('/init', methods: [Request::METHOD_POST])]
    public function init(): JsonResponse
    {
        return new JsonResponse('{"token": "b2ca1523c3e44318ba600b48f29846b30a9e00a3"}', json: true);
    }

    #[Route('/register', methods: [Request::METHOD_POST])]
    public function register(): JsonResponse
    {
        return new JsonResponse(
            '{"token": "b2ca1523c3e44318ba600b48f29846b30a9e00a3", "refreshToken": "c8f9b34b6568838e968805cfad8e00c7e53bcef7"}',
            json: true
        );
    }

    #[Route('/login', methods: [Request::METHOD_POST])]
    public function login(): JsonResponse
    {
        return new JsonResponse(
            '{"token": "b2ca1523c3e44318ba600b48f29846b30a9e00a3", "refreshToken": "c8f9b34b6568838e968805cfad8e00c7e53bcef7"}',
            json: true
        );
    }

    #[Route('/refresh', methods: [Request::METHOD_POST])]
    public function refresh(): JsonResponse
    {
        return new JsonResponse(
            '{"token": "b2ca1523c3e44318ba600b48f29846b30a9e00a3", "refreshToken": "c8f9b34b6568838e968805cfad8e00c7e53bcef7"}',
            json: true
        );
    }

    #[Route('/logout', methods: [Request::METHOD_POST])]
    public function logout(): JsonResponse
    {
        return new JsonResponse('{}', json: true);
    }
}
