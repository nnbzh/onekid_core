<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @OA\Info(
     *   title="Module Admin Documentation",
     *   version="1.0",
     *   @OA\Contact(
     *     email="info@adata.kz",
     *     name="Adata Team"
     *   )
     * )
     * @OA\SecurityScheme(
     *     type="http",
     *     in="header",
     *     securityScheme="bearer",
     *     scheme="bearer"
     * )
     */
}
