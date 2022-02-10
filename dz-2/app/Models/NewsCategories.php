<?php

namespace App\Models;

class NewsCategories
{
    private $categories = [
        [
            'id' => '1',
            'title' => 'sport'
        ],
        [
            'id' => '2',
            'title' => 'show Business'
        ],
        [
            'id' => '3',
            'title' => 'politics'
        ]
    ];

    /**
     * @return \string[][]
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    public function getCategoryIdByTitle($title):? int
    {
        foreach ($this->categories as $category) {
            if ($category['title'] === $title) {
                return $category['id'];
            }
        }
        return null;
    }
}
