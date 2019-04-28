<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'title', 'text', 'user_id', 'image', 'category'
    ];

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
