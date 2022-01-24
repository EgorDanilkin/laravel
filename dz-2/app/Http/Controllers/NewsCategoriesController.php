<?php

namespace App\Http\Controllers;

use App\Models\NewsCategories;
use Illuminate\Http\Request;

class NewsCategoriesController extends Controller
{
    public function index()
    {

        $categories = new NewsCategories();

        return view('сategories', [
            'categories' => $categories->getCategories(),
        ]);
    }
}
