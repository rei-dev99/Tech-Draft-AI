<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // 各列の登録を許可する(ホワイトリスト)
    protected $fillable = ['user_id', 'title', 'body', 'html_content', 'is_published', 'created_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
