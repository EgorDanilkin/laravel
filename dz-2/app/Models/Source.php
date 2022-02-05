<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    use HasFactory;

    public static function getSourcesInAssocArray()
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
