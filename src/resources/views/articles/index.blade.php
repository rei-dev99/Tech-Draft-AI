@extends('layouts.parents')
@section('title', 'Articleのインデックスページ')
@section('content')

<div class="w-full md:p-6 p-4">
    <h2 class="text-4xl font-bold text-center">記事一覧</h2><!-- ページタイトル -->
    <div class="grid grid-flow-col grid-row2 gap-6 mt-6">
        <div class="row-span-2 row-end-3 border border-primary text-center rounded-lg p-6">
            <h3 class="text-2xl font-bold">ユーザー名：{{ $user->name }}</h3><!-- 作成者 -->
            <p>hogehogehogehogehogehogehogehogehoge<br>hogehogehogehogehoge</p>
        </div>
        <div class="row-start-1 row-end-4 flex flex-col flex-grow gap-6">
            @foreach ($articles as $article)
                <div class="p-6 justify-center rounded-lg border border-primary">
                    <h3 class="text-2xl font-bold">{{ $article->title }}</h3><!-- 記事タイトル -->
                    <p class="p-3 text-main">作成者：{{ $article->user->name }}</p><!-- 作成者 -->
                    <p class="p-3 text-main">{{ $article->is_published }}</p><!-- 下書き・公開 -->
                    <p class="p-3 text-main">{{ $article->created_at }}</p><!-- 作成日 -->
                </div><!-- 記事を取り出す -->
            @endforeach
        </div>
    </div>
</div>

@endsection
