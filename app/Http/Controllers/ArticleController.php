<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    public function getArticle()
    {
        return view('pages.both.article', ['articles' => Article::all()]);
    }


    public function show(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $articles = Article::all();
        return view('pages.both.article', [
            'articles' => $articles
        ]);
    }

    public function showCreate(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.user.create_article');
    }

    public function store(Request $request)
    {
        $data = $request->post();
        dump($data);

        $validator = validator($data, [
            'title' => 'required',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            dump($validator->errors());
        } else {
            $data['user_id'] = Auth::id();
            $article = Article::create($data);
            return redirect()->route('show_one_article', ['id' => $article->id]);
        }
    }

    public function showArticle() {
        return view('pages.user.create_article', ['data' => Article::latest()->first()]);
    }

    public function articleGet($id) {
        $article = Article::find($id);
        if(!$article) {
            abort(404);
        }
        return view('pages.user.article', [
           'article' => $article
        ]);
    }

}
