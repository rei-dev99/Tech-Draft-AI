<header class="sticky top-0 p-4 md:p-6 text-white w-full z-10">
    <div class="flex justify-between items-center bg-primary shadow-md p-4 md:p-6 rounded-lg font-bold">
        <h1><a class="text-4xl text-white hover:text-accent" href="{{ route('top') }}">Tech Draft AI</a></h1>
        <nav>
            <ul class="flex items-center gap-6">
                <li><a href="{{ route('top') }}" class="text-white hover:text-accent transition duration-200">トップ</a></li>
                <li><a href="{{ route('register') }}" class="text-white hover:text-accent transition duration-200">新規登録</a></li>
                <li><a href="{{ route('login') }}" class="text-white hover:text-accent transition duration-200">ログイン</a></li>
            </ul>
        </nav>
        <a href="{{ route('article.create') }}" class="bg-accent text-white hover:bg-white hover:text-accent p-2 rounded-md transition duration-200">記事を書く</a>
    </div>
</header>
