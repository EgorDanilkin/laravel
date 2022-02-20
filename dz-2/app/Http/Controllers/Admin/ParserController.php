<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\Source;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserController extends Controller
{
    public function index()
    {
        $xml = XmlParser::load('https://lenta.ru/rss/news');

//        dd($xml);

        $data = $xml->parse([
            'channel_title' => ['uses' => 'channel.title'],
            'channel_link' => ['uses' => 'channel.link'],
            'items' => ['uses' => 'channel.item[title,description,category]'],
        ]);

//        dd($data);

        $source = Source::query()
            ->where('url', '=', $data['channel_link'])
            ->first();

        if (is_null($source)) {
            $source = new Source();
            $source->fill([
                'title' => $data['channel_title'],
                'url' => $data['channel_link'],
            ])->save();
        }

        $items = $data['items'];

        foreach ($items as $item) {

            $category = Category::getCategoryByTitle($item['category']);
            if (is_null($category)) {
                $category = new Category();
                $category->fill([
                    'title' => $item['category'],
                ])->save();
            }

            $news = News::query()
                ->select('id')
                ->where('title', '=', $item['title'])
                ->first();
            if (is_null($news)) {
                $news = new News();
                $news->fill([
                    'title' => $item['title'],
                    'content' => $item['description'],
                    'source_id' => $source->id,
                    'category_id' => $category->id,
                ])->save();
            }
        }

        return redirect()->route('welcome');
    }

}
