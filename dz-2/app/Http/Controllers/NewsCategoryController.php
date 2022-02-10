<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategories;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index($title, News $news, NewsCategories $categories)
    {
        $categoryId = $categories->getCategoryIdByTitle($title);
        $categoryNews = $news->getNewsByCategoryId($categoryId);

        return view('category', ['news' => $categoryNews]);
    }
}
