<?php

namespace App\Models;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;

class News
{
    private $news = [
        [
            'id' => 1,
            'title' => 'title1 Sport',
            'categoryId' => 1,
            'text' => 'some text',
        ],
        [
            'id' => 2,
            'title' => 'title2 Sport',
            'categoryId' => 1,
            'text' => 'some text',
        ],
        [
            'id' => 3,
            'title' => 'title1 Show Business',
            'categoryId' => 2,
            'text' => 'some text',
        ],
        [
            'id' => 4,
            'title' => 'title1 Politics',
            'categoryId' => 3,
            'text' => 'some text',
        ],
        [
            'id' => 5,
            'title' => 'title2 Politics',
            'categoryId' => 3,
            'text' => 'some text',
        ],
    ];

    /**
     * @return Collection
     */
    public function getNews(): Collection
    {
        return \DB::table('news')
            ->select(['*'])
            ->get();
    }

    /**
     * @param $id
     * @return Builder|null
     */
    public function getNewsById($id):? object
    {
        return \DB::table('news')
            ->select(['*'])
            ->where('id', '=', $id)
            ->first();
    }

    /**
     * @param $id
     * @return Collection
     */
    public function getNewsByCategoryId($id): Collection
    {
        return \DB::table('news')
            ->select(['*'])
            ->where('category_id', '=', $id)
            ->get();
    }
}
