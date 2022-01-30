<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "content",
        "likes",
        "comment",
        "user_id",
    ];

    public function creator() {
        return $this->belongsTo(User::class);
        //Статья пользователя
    }

    public function comments() {
        return $this->hasMany(Comment::class);
        //Комментарии статьи
    }

}
