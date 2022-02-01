<?php

namespace App\Http\Controllers;

use App\Models\NewsCategories;
use Illuminate\Http\Request;

class NewsCategoriesController extends Controller
{
    public function index(NewsCategories $categories)
    {
        $categories = $categories->getCategories()->toArray();

        return view('сategories', [
            'categories' => $categories,
        ]);
    }
}
