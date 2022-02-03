<?php

namespace App\Models;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;

class News
{

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
