<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function getArticle() {
        return view('pages.both.article', ['articles' => Article::all()]);
    }


    public function show(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.both.article');
    }

    public function showCreate(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.user.create_article');
    }

    public function store(Request $request) {
        $data = $request->post();
        dump($data);

        $validator = validator($data, [
           'title' => 'required',
           'content' => 'required',
        ]);

        if($validator->fails()) {
            dump($validator->errors());
        } else {
            Article::create();
        }

        Article::create($data);
    }
}
