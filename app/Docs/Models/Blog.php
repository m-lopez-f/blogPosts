<?php

namespace App\Docs\Models;

/**
 * @OA\Schema(
 *     title="Blog post",
 *     description="Blog post model",
 *     @OA\Xml(
 *         name="Blog"
 *     )
 * )
 */
class Blog
{

    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     format="int64",
     *     example=1
     * )
     *
     * @var integer
     */
    private $id;

    /**
     * @OA\Property(
     *      title="title",
     *      description="title of the new post Blog",
     *      example="A nice Blog"
     * )
     *
     * @var string
     */
    public $title;

    /**
     * @OA\Property(
     *      title="body",
     *      description="body of the new Blog",
     *      example="This is new Blog's body"
     * )
     *
     * @var string
     */
    public $body;

    /**
     * @OA\Property(
     *     title="userId",
     *     description="Blog userId's model"
     * )
     *
     * @var int
     */
    private $userId;
}