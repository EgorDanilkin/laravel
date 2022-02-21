<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public static function getCategoryByTitle(string $title)
    {
        return static::where('title', $title)
            ->first();
    }

    public static function getCategoriesInAssocArray()
    {
        $categories = static::all();

        $categoriesArray = [];

        foreach ($categories as $category)
        {
            $categoriesArray[ $category['id'] ] = $category['title'];
        }

        return $categoriesArray;
    }
}
