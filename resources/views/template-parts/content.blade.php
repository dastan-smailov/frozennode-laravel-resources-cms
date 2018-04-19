<article class="posts">
    <div class="row">
        <div class="col-md-3 mb-3">
            <a href="{{route('single', ['slug'=>$post->slug])}}"><img src="{{ asset('/uploads/posts/thumbnail/'. $post->thumbnail)  }}" alt="thumbnail" class="w-100"></a>
        </div>
        <div class="col-md-9">
            <header>
                <h2 class="entry-title h5"><a href="{{route('single', ['slug'=>$post->slug])}}" class="text-dark">{{$post->title}}</a></h2>
                <div class="article-meta text-muted">
                    <span><time><i class="far fa-clock"></i> 19.02.2018</time></span>
                </div>
            </header>
            <p>{{$post->excerpt}}</p>
            <footer>
                <a href="{{route('single', ['slug'=>$post->slug])}}" role="button" class="btn btn-secondary btn-sm">Читать далее</a>
            </footer>
            <hr>
        </div>
    </div>
</article>