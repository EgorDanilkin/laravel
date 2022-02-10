<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsCategoriesController extends Controller
{
    public function index()
    {

        return view('сategories', [
            'categories' => ['1', '2', '3', '4', '5'],
        ]);
    }
}
