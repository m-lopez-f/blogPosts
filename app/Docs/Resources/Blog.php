<?php

namespace App\Docs\Resources;

/**
 * @OA\Schema(
 *     title="Blog",
 *     description="Blog resource",
 *     @OA\Xml(
 *         name="Blog"
 *     )
 * )
 */
class BlogResource
{
    /**
     * @OA\Property(
     *     title="Blog Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Docs\Models\Blog[]
     */
    private $data;
}