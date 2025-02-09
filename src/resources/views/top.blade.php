@extends('layouts.parents')
@section('title', 'トップページ')
@section('content')

<!-- ファーストビュー -->
<div class="w-full h-100 relative">
    <img class="bg-cover bg-center object-cover h-full w-full" src="{{ asset('img/fv.jpg') }}" alt="ファーストビューイメージ架空画像">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white text-6xl w-full">
        <h2>Tech Draft AI</h2>
        <p>あなたの技術記事を進化させる</p>
    </div>
</div>

<!-- Tech Draft AIとはセクション -->
<section class="mt-6 p-6 bg-gray-100 text-center">
    <h2 class="text-2xl font-bold">Tech Draft AIとは</h2>
    <div>
        <p>Tech Draft AIは、アイデア出しから添削まで" 技術記事の執筆を効率化し、すべてのエンジニアがアイデアを簡単に形にできるプラットフォームです。</p>
    </div>
</section>

<!-- 特徴セクション -->
<section class="mt-6 p-6 text-center">
    <h2 class="text-2xl font-bold">3つの特徴</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-4">
        <div class="border p-4 rounded shadow">
            <h3 class="text-xl font-bold">特徴1「記事作成機能」</h3>
            <p class="mt-2">通常の記事の作成、保存、編集ができます。</p>
        </div>
        <div class="border p-4 rounded shadow">
            <h3 class="text-xl font-bold">特徴2「AIによる支援機能」</h3>
            <p class="mt-2">AIによるトピック提案・基本的な添削を提供いたします。</p>
        </div>
        <div class="border p-4 rounded shadow">
            <h3 class="text-xl font-bold">特徴3「共有機能」</h3>
            <p class="mt-2">QiitaやSNS共有する機能を提供いたします。</p>
        </div>
    </div>
</section>

<!-- アウトプットセクション -->
<section class="mt-6 p-6 bg-gray-100 text-center">
    <h2 class="text-2xl font-bold">さあ記事を書いてアウトプットしよう！</h2>
    <p>AIを利用して他のエンジニアと差をつけろ！</p>
</section>

<!-- ボタンセクション -->
<section class="mt-6 p-6 text-center">
    <h2 class="text-2xl font-bold">悩ましい記事の作成<br>AIを使って効率化しませんか？</h2>
    <div class="mt-4 flex justify-center space-x-4">
        <button class="bg-blue-500 text-white py-2 px-4 rounded">早速記事を書いてみる</button>
        <button class="bg-green-500 text-white py-2 px-4 rounded">まずは試しに使用してみる</button>
    </div>
</section>


@endsection
