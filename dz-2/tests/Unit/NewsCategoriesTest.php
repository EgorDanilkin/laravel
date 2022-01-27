<?php

namespace Tests\Unit;

use App\Models\NewsCategories;
use PHPUnit\Framework\TestCase;

class NewsCategoriesTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $model = new NewsCategories();
        $categories = $model->getCategories();
        $categoryId = $model->getCategoryIdByTitle('sport');

        $this->assertIsArray($categories);
        $this->assertArrayHasKey('id', $categories[0]);
        $this->assertArrayHasKey('title', $categories[0]);
        $this->assertNotEmpty($categories[0]['id']);

        $this->assertSame($categoryId, 1);
    }
}
