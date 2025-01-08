<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Category;
use App\Models\Page;

class ValidateCategoryAndPage
{
    public function handle($request, Closure $next)
    {
        $categorySlug = $request->route('categorySlug');
        $pageSlug = $request->route('pageSlug');

        $category = Category::where('slug', $categorySlug)->first();
        if (!$category) {
            abort(404);
        }

        $page = Page::where('slug', $pageSlug)
            ->where('category_id', $category->id)
            ->first();

        if (!$page) {
            abort(404);
        }

        return $next($request);
    }
}
