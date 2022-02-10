<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index($title)
    {
        $news = new News();
        $categoryNews = $news->getNewsByCategory($title);

        return view('category', ['news' => $categoryNews]);
    }
}
