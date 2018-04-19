<?php

namespace App;
use App\Post;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function getBySlug($slug)
    {
        return $this->with('posts')->slug($slug)->firstOrFail();
    }

    public function scopeSlug($query, $slug)
    {
        $query->where(['slug' => $slug]);
    }

}
