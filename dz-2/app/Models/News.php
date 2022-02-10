<?php

namespace App\Models;

class News
{
    private $news = [
        1 => [
            'title' => 'title1 Sport',
            'category' => 'sport',
            'text' => 'some text',
        ],
        2 => [
            'title' => 'title2 Sport',
            'category' => 'sport',
            'text' => 'some text',
        ],
        3 => [
            'title' => 'title1 Show Business',
            'category' => 'show Business',
            'text' => 'some text',
        ],
        4 => [
            'title' => 'title1 Politics',
            'category' => 'politics',
            'text' => 'some text',
        ],
        5 => [
            'title' => 'title2 Politics',
            'category' => 'politics',
            'text' => 'some text',
        ],
    ];

    /**
     * @return \string[][]
     */
    public function getNews(): array
    {
        return $this->news;
    }

    /**
     * @param $id
     * @return string[]
     */
    public function getNewsById($id): array
    {
        return $this->news[$id];
    }

    public function getNewsByCategory($category): array
    {
        $news = [];

        for ($i = 1; $i < count($this->news) + 1; $i++) {
            if ($this->news[$i]['category'] == $category) {
                $news[] = $this->news[$i];
            }
        }

        return $news;
    }
}
