<div id="widget-recent-posts" class="box mb-4">
    <div class="title"><h5>Свежие записи</h5></div>
    <ul class="list-unstyled">
        @foreach( $recent_posts as $post )
            <li><a href="{{ route('single', ['slug'=>$post->slug] )}}" class="text-dark">{{ $post->title }}</a></li>
        @endforeach
    </ul>
</div>