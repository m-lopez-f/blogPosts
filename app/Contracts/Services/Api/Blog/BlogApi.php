<?php

namespace App\Contracts\Services\Api\Blog;

use App\DataTransfer\BlogData;
use App\DataTransfer\BlogDataCollection;

interface BlogApi
{
    public function index(): array;
    public function post( int $id): array;
}