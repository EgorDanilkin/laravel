<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use phpDocumentor\Reflection\Type;
use Tests\DuskTestCase;

class NewsCreateTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                    ->assertSee('Заголовок')
                    ->assertSee('Содержание')
                    ->assertSee('Категория')
                    ->assertSee('Источник')
                    ->assertSee('Изображение')
                    ->type('title', '')
                    ->press('Создать')
                    ->assertSee('Поле заголовок обязательно для заполнения.')
                    ->type('title', 'title')
                    ->press('Создать')
                    ->assertSee('Количество символов в поле заголовок должно быть между 10 и 50.')
                    ->type('contents', '')
                    ->press('Создать')
                    ->assertSee('Поле содержание обязательно для заполнения.')
                    ->type('contents', 'content')
                    ->press('Создать')
                    ->assertSee('Количество символов в поле содержание должно быть между 20 и 200.')
                    ->type('title', 'title111123')
                    ->type('contents', '1234567890qwertyuiop')
                    ->select('category_id', 3)
                    ->select('source_id', 4)
                    ->press('Создать')
                    ->assertSee('Данные сохранены');
        });
    }
}
