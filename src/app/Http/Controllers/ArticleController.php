<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        $user = Auth::user(); // 認証済みユーザー情報取得
        $articles = $user->articles; // 認証済みユーザーの記事取得

        return view('articles.index', [
            'articles' => $articles,
            'user' => $user
        ]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|max:100',
            'body' => 'required'
        ]);

        // リクエストからボディ取得、保存
        $article = new Article();
        $article->user_id = Auth::user()->id;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->is_published = $request->is_published;
        $article->save();

        // 処理後リダイレクト
        return redirect('/article');
    }

    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function edit($id)
    {
        $article = Auth::user()->articles->find($id);

        return view('articles.edit', [
            'article' => $article
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:100',
            'body' => 'required',
            'is_published' => 'required|boolean'
        ]);

        $article = Auth::user()->articles->find($id);
        $article->update($request->all());

        return redirect()->route('article.show', $article)->with('success', '記事が更新されました。');
    }

    public function destroy($id)
    {
        $article = Auth::user()->articles->find($id);
        $article->delete();

        return redirect('/article')->with('success', '記事が削除されました。');
    }
}
