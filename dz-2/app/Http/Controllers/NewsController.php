<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($id)
    {

        $news = News::find($id);
        return view('news', [
            'news' => $news
        ]);
    }
}
