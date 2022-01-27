<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($id, News $news)
    {

        $foundNews = $news->getNewsById($id);
        return view('news', [
            'news' => $foundNews
        ]);
    }
}
