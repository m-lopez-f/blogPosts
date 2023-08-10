<?php

namespace App\Services\Api\Blog;

use App\Contracts\Services\Api\Blog\BlogApi as BlogApiInterface; 
use App\Contracts\Support\HttpClientInterface;
use App\DataTransfer\BlogDataCollection;
use App\DataTransfer\BlogData;
use Illuminate\Support\Facades\Log;

final class BlogApi implements BlogApiInterface
{
    /** @var \App\Contracts\Support\HttpClientInterface  */
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function index(): array
    {
        $posts = $this->client->get('https://jsonplaceholder.typicode.com/posts');

        
        return BlogDataCollection::create($posts, function ($post) {
            return BlogData::fromModel(...$post);
        });
    }

    public function post(int $id): array
    {
        $post = $this->client->get('https://jsonplaceholder.typicode.com/posts/' . $id);

        
        return BlogData::fromModel(...$post);
    }
}