<?php

namespace Tests\Feature;

use App\DataTransfer\BlogData;
use App\Services\Api\Blog\BlogApi;
use Illuminate\Support\Facades\Http;
use App\Contracts\Support\HttpClientInterface;
use Tests\TestCase;

class BlogTest extends TestCase
{
    /** @test */
    public function it_lists_post_from_blog(): void
    {
        $blogPost = [
            [
                1,
                1,
                'It\'s a test',
                'johndfsfsdfsd sfsdfsdfsdf',
            ],
        ];
        // $interfacehttpClient = new HttpClientInterface();
        $interfacehttpClient = $this->createMock(HttpClientInterface::class);

        $BlogService = new BlogApi($interfacehttpClient);

        $expectedPost = array(
           [ 1,
            1,
            'It\'s a test',
            'johndfsfsdfsd sfsdfsdfsdf',]
            
        );

        $this->assertEquals($expectedPost, $BlogService->index());
    }
}
