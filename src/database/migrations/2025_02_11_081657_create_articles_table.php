<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); // 主キー
            $table->foreignId('user_id')
                ->constrained('users') // usersテーブルのidを参照
                ->cascadeOnDelete();   // ユーザー削除時に関連する記事も削除
            $table->string('title', 100); // 記事のタイトル（最大100文字）
            $table->text('body');         // マークダウン形式の本文（ユーザー入力）
            $table->text('html_content')->nullable(); // HTML変換後の本文（表示用キャッシュ）
            $table->boolean('is_published')->default(false); // 公開状態（false:下書き, true:公開）
            $table->timestamps();         // 作成日時と更新日時（created_at, updated_at）
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
