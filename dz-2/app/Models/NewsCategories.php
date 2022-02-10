<?php

namespace App\Models;

class NewsCategories
{
    private $categories = [
        1 => [
            'title' => 'sport'
        ],
        2 => [
            'title' => 'show Business'
        ],
        3 => [
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
}
