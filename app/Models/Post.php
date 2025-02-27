<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];

    // Relation Many-to-One avec User (Un article appartient à un utilisateur)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
