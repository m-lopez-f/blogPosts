<?php

namespace App\DataTransfer;

use Illuminate\Support\Facades\Log;

class BlogDataCollection
{

    public static function create(array $data, mixed $callback): array
    {
        $collection = [];

        foreach ($data as $item) {
            $element = $callback($item);
            $collection[] = $element;
        }
        return $collection;
    }
}