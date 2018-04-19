<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function getRecentPosts()
    {
        return $this->post()->select('title', 'slug')->limit(5)->get();
    }

    public function getBySlug($slug)
    {
        return $this->slug($slug)->firstOrFail();
    }

    public function getBySearch($q)
    {
        return $this->search($q)->get();
    }

    public function scopeSlug($query, $slug)
    {
        $query->where(['slug' => $slug]);
    }

    public function scopeSearch($query, $slug)
    {
        $query->where(['slug' => $slug]);
    }

    public function scopePost($query)
    {
        $query->where(['post_type' => 'post']);
    }

}
