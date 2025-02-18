@extends('layouts.parents')
@section('title', $article->title)
@section('content')
<div class="w-full max-w-4xl mx-auto py-8 px-4">
    <div class="mb-8">
        <h1 class="text-4xl font-bold text-main mb-4">{{ $article->title }}</h1>
        <div class="flex items-center text-sm text-accent">
            <img src="https://www.gravatar.com/avatar/{{ md5($article->user->email) }}?s=50&d=mp" alt="{{ $article->user->name }}" class="w-10 h-10 rounded-full mr-3 border border-accent">
            <span class="mr-4">{{ $article->user->name }}</span>
            <span class="mr-4">投稿: {{ $article->created_at->format('Y年m月d日') }}</span>
            <span>更新: {{ $article->updated_at->format('Y年m月d日') }}</span>
        </div>
    </div>

    <article class="bg-white border border-sub rounded-lg shadow-lg p-8 mb-8">
        <div class="prose max-w-none text-main">
            {{ $article->body }}
        </div>
    </article>

    <div class="flex justify-between items-center">
        <a href="{{ route('article.index') }}" class="text-primary hover:text-accent transition duration-300 ease-in-out">
            <i class="fas fa-arrow-left mr-2"></i>記事一覧に戻る
        </a>
        <div>
            <a href="#" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-accent transition duration-300 ease-in-out mr-2">編集</a>
            <button type="submit" class="bg-accent text-white px-4 py-2 rounded-lg hover:bg-primary transition duration-300 ease-in-out">削除</button>
        </div>
    </div>
</div>

@endsection
