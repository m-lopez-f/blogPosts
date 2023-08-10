<?php

namespace App\Http\Controllers;

use App\Contracts\Services\Api\Blog\BlogApi;
use App\Http\Requests\BlogPostRequest;
use Illuminate\View\View;
use \Illuminate\Routing\Redirector;
use Illuminate\Http\JsonResponse;

final class BlogController
{
    /** @var BlogApi */
    protected $blogApi;

    public function __construct(BlogApi $blogApi)
    {
        $this->blogApi = $blogApi;
    }

    public function index(): View
    {
        return view('posts', [
            'posts' => $this->blogApi->index()
        ]);
    }

    public function getPost($id): View
    {
        return view('post', [
            'post' => $this->blogApi->post($id)
        ]);
    }
}