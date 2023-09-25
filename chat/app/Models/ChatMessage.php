<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    protected $fillable = ['user_name', 'email', 'home_page', 'text'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
