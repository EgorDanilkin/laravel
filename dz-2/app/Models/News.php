<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;

class News extends Model
{

    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
        'status_id',
        'category_id',
        'source_id',
        'updated_at',
    ];

    /**
     * @param $id
     * @return Collection
     */
    public static function getNewsByCategoryId($id): Collection
    {
        return static::where('category_id', $id)
            ->get();
    }
}
