<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsFormRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('title')->paginate(5);
        return view('admin.index', [
            'title' => 'Страница администратора',
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
        $category = Category::all();
        $route = route('admin.news.index');
        $titleButton = 'Вернуться на главную страницу';
        return view('admin.newNews', [
            'title' => 'Добавить статью',
            'category' => $category,
            'route' => $route,
            'title_button' => $titleButton,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NewsFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsFormRequest $request)
    {

        News::create($request->validated());

        return redirect(route('admin.news.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::where('id', $id)->first();

        return view('admin.news', [
            'title' => $news->title,
            'news' => $news,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::where('id', $id)->first();
        $title = 'Редактировать статью ' . $news->title;
        $route = route('admin.news.show', $news->id);
        $titleButton = 'Вернуться на страницу новости';
        return view('admin.newNews', [
            'title' => $title,
            'news' => $news,
            'category' => $news->category->id,
            'route' => $route,
            'title_button' => $titleButton,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NewsFormRequest $request
     * @param News $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsFormRequest $request, News $news)
    {
        $news->update($request->validated());

        return redirect(route("admin.news.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();

        return redirect(route("admin.news.index"));
    }
}
