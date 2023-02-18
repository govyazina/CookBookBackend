<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// Api Mock
#[Route('/recipe')]
final class RecipeController
{
    private const RECIPES_MOCK = [
        [
            'id' => 'string',
            'title' => 'Avocado',
            'description' => 'Peel and eat an avocado',
            'cooked' => true,
            'ingredients' => [
                [
                    'name' => 'Avocado',
                    'quantity' => 1,
                    'unit' => 'pc',
                    'required' => true,
                ],
            ],
            'tags' => ['simple', 'healthy'],
        ],
    ];

    #[Route(methods: [Request::METHOD_GET])]
    public function read(): JsonResponse
    {
        return new JsonResponse(['recipes' => self::RECIPES_MOCK]);
    }

    #[Route(methods: [Request::METHOD_POST])]
    public function create(): JsonResponse
    {
        return new JsonResponse(self::RECIPES_MOCK[0]);
    }

    #[Route(methods: [Request::METHOD_PUT])]
    public function update(): JsonResponse
    {
        return new JsonResponse(self::RECIPES_MOCK[0]);
    }

    #[Route(methods: [Request::METHOD_DELETE])]
    public function delete(): Response
    {
        return new Response();
    }
}
