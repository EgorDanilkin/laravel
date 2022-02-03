<?php

namespace App\Models;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;

class NewsCategories
{

    /**
     * @return Collection
     */
    public function getCategories(): Collection
    {
        return \DB::table('categories')
            ->select(['*'])
            ->get();
    }

    /**
     * @param $title
     * @return Collection|null
     */
    public function getCategoryIdByTitle($title):? int
    {
        return \DB::table('categories')
            ->where('title', '=', $title)
            ->value('id');
    }
}
