<article>
    <header>
        <h1 class="entry-title h5">{{$post->title}}</h1>
        <div class="article-meta text-muted">
            <span><time><i class="far fa-clock"></i> Февраль 19, 2018</time></span>
        </div>
        <hr>
    </header>
    <div id="content">
        {!! $post->content !!}
    </div>
</article>