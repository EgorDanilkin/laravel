<?php

namespace App\Models;

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
    public function getNewsById($id):? array
    {
        foreach ($this->news as $news) {
            if ($news['id'] === (int)$id) {
                return $news;
            }
        }
        return null;
    }

    public function getNewsByCategoryId($id): array
    {
        $foundNews = [];

        foreach ($this->news as $news) {
            if ($news['id'] === $id) {
                $foundNews[] = $news;
            }
        }

        return $foundNews;
    }
}
