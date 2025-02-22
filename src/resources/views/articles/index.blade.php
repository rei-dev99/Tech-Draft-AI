@extends('layouts.parents')
@section('title', '記事一覧')
@section('content')

<div class="w-full max-w-6xl mx-auto py-8 px-4">
    <h1 class="text-4xl font-bold text-main mb-8 text-center">記事一覧</h1>

    <div class="flex flex-col md:flex-row gap-8">
        <!-- ユーザープロフィール -->
        <div class="md:w-1/4">
            <div class="bg-white border border-sub rounded-lg p-6 sticky top-[136px]">
                <img src="https://www.gravatar.com/avatar/{{ md5($user->email) }}?s=200&d=mp" alt="{{ $user->name }}" class="w-32 h-32 rounded-full mx-auto mb-4">
                <h2 class="text-2xl font-bold text-main text-center mb-2">{{ $user->name }}</h2>
                <p class="text-main text-center mb-4">ユーザーの自己紹介文がここに入ります。</p>
                <div class="flex justify-center">
                    <a href="{{ route('article.create') }}" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-accent transition duration-300 ease-in-out">新規記事作成</a>
                </div>
            </div>
        </div>

        <!-- 記事リスト -->
        <div class="md:w-3/4">
            @foreach ($articles as $article)
            <div class="bg-white border border-sub rounded-lg p-6 mb-6 hover:shadow-lg transition duration-300 ease-in-out">
                <h3 class="text-2xl font-bold mb-2">
                    <a href="{{ route('article.show', ['article' => $article->id]) }}" class="text-primary hover:text-accent">
                        {{ $article->title }}
                    </a>
                </h3>
                <div class="flex items-center text-sm text-accent mb-4">
                    <span class="mr-4">投稿: {{ $article->created_at->format('Y年m月d日') }}</span>
                    <span class="mr-4">更新: {{ $article->updated_at->format('Y年m月d日') }}</span>
                    <span class="{{ $article->is_published ? 'text-accent' : 'text-sub' }}">
                        {{ $article->is_published ? '公開' : '下書き' }}
                    </span>
                </div>
                <p class="text-main mb-4">{{ Str::limit($article->body, 150) }}</p>
                <div class="flex justify-between items-center">
                    <a href="{{ route('article.show', ['article' => $article->id]) }}" class="text-primary hover:text-accent">
                        続きを読む
                    </a>
                    <div class="flex items-center">
                        <img src="https://www.gravatar.com/avatar/{{ md5($article->user->email) }}?s=30&d=mp" alt="{{ $article->user->name }}" class="w-6 h-6 rounded-full mr-2">
                        <span class="text-main">{{ $article->user->name }}</span>
                    </div>
                </div>
                @if (Auth::id() === $article->user_id)
                <div class="flex gap-2 mt-4">
                    <a href="{{ route('article.edit', $article->id) }}" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-accent transition duration-300 ease-in-out mr-2">編集</a>
                    <form action="{{ route('article.destroy', $article->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-accent text-white px-4 py-2 rounded-lg hover:bg-primary transition duration-300 ease-in-out" onclick="if(!confirm('本当に削除しますか？')){return false};">削除</button>
                    </form>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
