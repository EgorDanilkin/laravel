<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\NewsParsingJob;
use App\Models\Category;
use App\Models\News;
use App\Models\Source;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserController extends Controller
{
    public function index()
    {

        $sources = [
            'https://lenta.ru/rss/news',
            'https://ria.ru/export/rss2/archive/index.xml',
        ];

        foreach ($sources as $source) {
            NewsParsingJob::dispatch($source);
        }

//        return redirect()->route('welcome');
    }

}
