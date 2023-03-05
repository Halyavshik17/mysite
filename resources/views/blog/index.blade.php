<ul>
    @foreach($data['posts'] as $posts)
    <li>
        <h2><a href="{{url($posts['slug'])}}">{{ $posts['title'] }}</a></h2>
        <p>{{ $posts['published_at'] }}</p>
        
        @foreach($posts['topic'] as $topic)
            @if($topic['topic_id'] == $posts['post_id'])   
                <p>{{ $topic['name'] }}</p>
            @endif
        @endforeach 
    </li>
    @endforeach
</ul>