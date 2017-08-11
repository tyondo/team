@if(isset($posts))
    @foreach($posts as $post)
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="default-blog-news wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <figure class="img-holder">
                    <a href="{{route('musoni.news.show', $post->slug)}}">
                        <img style="height: 200px" src="{{asset($post->photo->file)}}" alt="News"></a>
                    <figcaption class="overlay">
                        <div class="box">
                            <div class="content">
                                <a href="{{route('musoni.news.show', $post->slug)}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
                <div class="lower-content">
                    <div class="date">{{$post->created_at->diffForHumans()}}</div>
                    <h4><a href="{{route('musoni.news.show', $post->slug)}}">{{$post->title}}</a></h4>
                    <div class="post-meta">by {{$post->user->name}} tag: {{$post->category->name}}</div>
                    <div class="text">
                        {!! str_limit(strip_tags($post->body), 200) !!}
                    </div>
                    <div class="link">
                        <a href="{{route('musoni.news.show', $post->slug)}}" class="default_link">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    @endforeach
@endif
