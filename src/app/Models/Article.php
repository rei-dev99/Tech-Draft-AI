<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // 各列の登録を許可する(ホワイトリスト)
    protected $fillable = [
        'title',
        'body',
        'is_published',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
