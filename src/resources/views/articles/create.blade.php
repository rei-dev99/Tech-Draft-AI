@extends('layouts.parents')
@section('title', 'Articleのcreate')
@section('content')

<div class="w-full md:p-6 p-4">
    <form method="POST" action="{{ route('article.store') }}">
        @csrf
        <div class="flex items-center justify-between font-bold">
            <h2 class="text-3xl">記事作成</h2>
            <div class="flex items-center gap-3">
                <label for="is_published">公開状態</label>
                <select name="is_published" for="is_published" class="rounded-lg">
                    <option value="0">下書き</option>
                    <option value="1">公開</option>
                </select>
                <button type="submit" class="text-white bg-accent p-2 rounded-lg hover:opacity-70">作成する</button>
                <a href="{{ route('article.index') }}" class="text-primary rounded-lg hover:opacity-70">一覧ページへ</a>
            </div>
        </div>
        <div class="mt-4 text-2xl font-bold flex items-center w-full">
            <label for="title" class="mr-4">タイトル：</label>
            <input id="title" name="title" type="text" class="flex-grow h-12 rounded-lg" placeholder="記事のタイトルを入力してください">
        </div>
        <div class="mt-4 flex-col">
            <label for="body" class="text-2xl font-bold">本文</label>
            <textarea name="body" id="body" class="mt-2 w-full h-screen rounded-lg" placeholder="記事の本文を入力してください"></textarea>
        </div>
    </form>
</div>

@endsection
