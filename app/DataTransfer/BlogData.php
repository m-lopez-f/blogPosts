<?php

namespace App\DataTransfer;

class BlogData
{
    public function __construct(
        public int $id,
        public int $userId,
        public string $title,
        public string $body,
    ) {
    }

    public static function fromModel(
        int $id,
        int $userId,
        string $title,
        string $body
    ): array
    {

        return [
            'id' => $id,
            'userId' => $userId,
            'title' => $title,
            'body' => $body,
        ];
    }
}