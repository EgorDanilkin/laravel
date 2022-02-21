<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index($title)
    {

        $categoryId = Category::getCategoryByTitle($title)->id;

        $categoryNews = News::getNewsByCategoryId($categoryId);

        return view('category', ['news' => $categoryNews]);
    }
}
