<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @OA\OpenApi(
     *     @OA\Info(
     *         version="1.0",
     *         title="Todo List Api",
     *         description="Demo Todo List Api",
     *     ),
     *     @OA\ExternalDocumentation(
     *         description="More documentation here...",
     *         url="https://example.com/externaldoc1/"
     *   )
     * ),
     *
     * @OA\SecurityScheme(
     *      securityScheme="bearerAuth",
     *      in="header",
     *      name="Authorization",
     *      type="http",
     *      scheme="Bearer",
     *      bearerFormat="JWT",
     * )
     *
     * @OA\SecurityScheme(
     *     type="apiKey",
     *     name="api_key",
     *     in="header",
     *     securityScheme="api_key"
     * )
     *
     * @OA\SecurityScheme(
     *   type="oauth2",
     *   securityScheme="petstore_auth",
     *   @OA\Flow(
     *      authorizationUrl="http://petstore.swagger.io/oauth/dialog",
     *      flow="implicit",
     *      scopes={
     *         "read:pets": "read your pets",
     *         "write:pets": "modify pets in your account"
     *      }
     *   )
     * )
     */
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
