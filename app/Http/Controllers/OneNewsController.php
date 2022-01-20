<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class OneNewsController extends Controller
{
    public function getOneNews($id)
    {
        $news = News::where('id', $id)->first();
        return view('page/oneNews', [
            'title' => $news->category['title'],
            'news' => $news,
        ]);
    }
}
