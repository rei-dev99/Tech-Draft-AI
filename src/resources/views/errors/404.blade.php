@extends('layouts.parents')
@section('title', '404ページ')
@section('content')

<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md md:max-w-4xl w-full space-y-8">
        <div>
            <h1 class="text-4xl font-bold text-main text-center">おや？お探しのページが見つからないようです🥺</h1>
            <p class="mt-2 text-main text-center">申し訳ございませんが、指定されたページが見つかりませんでした。ご覧になっていたリンクが無効になっているか、削除されたのかもしれません。</p>
        </div>
        <div>
            <img class="mx-auto h-80 w-auto" src="{{ asset('img/error-image.jpg') }}" alt="404 Image">
        </div>
        <div class="text-center">
            <p class="text-main mb-4">下記ボタンより別のページに遷移されてください〜</p>
            <div class="space-x-4">
                <a href="{{ route('top') }}" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-accent transition duration-300 ease-in-out">トップへ戻る</a>
                <a href="{{ route('login') }}" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-accent transition duration-300 ease-in-out">ログイン</a>
            </div>
        </div>
    </div>
</div>

@endsection
