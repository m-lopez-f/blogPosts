<?php

namespace App\Docs\Request;

/**
 * @OA\Schema(
 *      title="Store post request",
 *      description="Store Post request body data",
 *      type="object",
 *      required={"title", "body"}
 * )
 */

class StorePostRequest
{
    /**
     * @OA\Property(
     *      title="title",
     *      description="Name of the new post",
     *      example="A nice post"
     * )
     *
     * @var string
     */
    public $title;

    /**
     * @OA\Property(
     *      title="body",
     *      description="Key of the new post",
     *      example="a-nice-post"
     * )
     *
     * @var string
     */
    public $body;

    /**
     * @OA\Property(
     *      title="userId",
     *      description="User ID of create post",
     *      example="85"
     * )
     *
     * @var int
     */
    public $userId;
}