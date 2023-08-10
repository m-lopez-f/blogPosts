<?php

namespace App\Http\API\Controllers;

use App\Contracts\Services\Api\Blog\BlogApi;
use App\Http\Requests\BlogPostRequest;
use Illuminate\View\View;
use \Illuminate\Routing\Redirector;
use Illuminate\Http\JsonResponse;

final class BlogApiController
{
    /** @var BlogApi */
    protected $blogApi;

    public function __construct(BlogApi $blogApi)
    {
        $this->blogApi = $blogApi;
    }

    /**
     * @OA\Get(
     *      path="/blog/list",
     *      operationId="getBlogListPost",
     *      tags={"Blog"},
     *      summary="Get Post from blog",
     *      description="Returns  data from post in blog",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/BlogResource")
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     * )
     */
    public function list(): JsonResponse
    {
        return response()->json($this->blogApi->index());
    }

    /**
     * @OA\Post(
     *      path="/blog/add",
     *      operationId="storePost",
     *      tags={"Blog"},
     *      summary="Store new Post blog",
     *      description="Returns Post blog data",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/StorePostRequest")
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Blog")
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     * )
     */
    public function store(BlogPostRequest $request): array
    {
        // Retrieve the validated input data...
        $validated = $request->validated();
        sleep(500);
        // return redirect('/');
        return $request->all();
    }
}