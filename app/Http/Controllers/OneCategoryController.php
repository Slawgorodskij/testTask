<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class OneCategoryController extends Controller
{
    public function getOneCategory($id)
    {
        $categories = Category::where('id', $id)->first();

        return view('page/oneCategory',
            [
                'title' => $categories->title,
                'list_news' => $categories->news,
            ]);
    }
}
