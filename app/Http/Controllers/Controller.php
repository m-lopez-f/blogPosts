<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Laravel OpenApi create and read post in blog Documentation",
 *      description="Blog and post",
 *      @OA\Contact(
 *          email="mlf.481990@gmail.com"
 *      ),
 *      @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * )
 *
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="Blog API Server"
 * )
 * 
* @OA\Tag(
*     name="Blog",
*     description="API Endpoints of Blog"
* )
*/

class Controller extends BaseController
{
    use AuthorizesRequests;
    use ValidatesRequests;
}
