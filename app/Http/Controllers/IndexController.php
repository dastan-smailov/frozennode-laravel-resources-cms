<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    public function __construct(Post $post)
    {
        $this->data = [];
        $this->data['general'] = json_decode(file_get_contents(storage_path().'/administrator_settings/general.json'));
        $this->data['recent_posts'] = $post->getRecentPosts();
    }

    public function home(){
        return view('home', $this->data);
    }

    public function category($slug, Category $category)
    {
        $this->data['category'] = $category->getBySlug($slug);
        return view('category', $this->data);
    }

    public function single($slug, Post $post)
    {
        $this->data['post'] = $post->getBySlug($slug);
        return view('single', $this->data);
    }

    public function search($q, Post $post)
    {
        $this->data['post'] = $post->getBySearch($q);
        return view('search', $this->data);
    }

}
