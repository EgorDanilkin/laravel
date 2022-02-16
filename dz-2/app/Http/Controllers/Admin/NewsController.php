<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminNewsSaveRequest;
use App\Models\Category;
use App\Models\News;
use App\Models\Source;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();

        return view('admin.news.index', [
            'news' => $news,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sources = Source::getSourcesInAssocArray();

        $categories = Category::getCategoriesInAssocArray();

        return view('admin.news.create', [
            'sources' => $sources,
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param News $news
     * @return \Illuminate\Http\Response
     */
    public function store(AdminNewsSaveRequest $request, News $news)
    {

        $news->fill($request->all());
        $news->save();

        return redirect()->route('admin::news::create')
            ->with('success', "Данные сохранены");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('admin.news.show', [
            'news' => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $sources = Source::getSourcesInAssocArray();

        $categories = Category::getCategoriesInAssocArray();

        return view('admin.news.edit', [
            'sources' => $sources,
            'categories' => $categories,
            'news' => $news,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminNewsSaveRequest $request, News $news)
    {
        $news->fill($request->all());
        $news->save();

        return redirect()->route('admin::news::edit', $news)
            ->with('success', "Данные сохранены");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {

        $news->delete();

        return redirect()->route('admin::news');
    }
}
