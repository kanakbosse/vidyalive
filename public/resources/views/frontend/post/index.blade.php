@extends("frontend.master")
@section("title", $post->title." - ".config('app.sitesettings')::first()->site_title)
@section("content")
<style>
.post-single{ margin-top: 120px}
.related-post{ background: rgb(238, 238, 238); box-sizing: border-box; padding: 10px; border-radius: 6px}
.related-post h4{ font-size: 20px; margin-bottom: 0px}
.entry-meta li, .entry-meta a{ color: #000 !important}
.related-post hr{    background: #b8b2b2; height: 1px; width: 100%;}
.allRelatedPostContainer img{    aspect-ratio: 1/0.6; object-fit: cover;}
.maxLine2{overflow: hidden; text-overflow: ellipsis; display: -webkit-box;  line-height: 16px;max-height: 32px;  -webkit-line-clamp: 2; -webkit-box-orient: vertical;}
.realtedArticle{ margin: 20px 0px;}
</style>
<section class="post-single">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8">
                <div class="post-single-image">
                    <img src="{{ asset("uploads/post/".$post->thumbnail) }}" alt="{{ $post->title }}" />
                </div>
                <div class="post-single-body">
                    <div class="post-single-title">
                        <ul class="entry-meta">
                            {{-- <li class="post-author-img"><img src="{{ asset("uploads/author/".($post->user->profile ?? "default.webp")) }}" alt="{{ $post->user->name }}"/></li>
                            <li class="post-author"> <a href="{{ route("frontend.user", $post->user->username) }}">{{ $post->user->name }}</a></li> --}}
                            <li class="entry-cat"> <a href="{{ route("frontend.category", $post->category->slug) }}" class="category-style-1 "><span class="line"></span>{{ $post->category->title }}  </a></li>
                            <li class="post-date"> <span class="line"></span>{{ $post->created_at->format("F d, Y") }}</li>
                        </ul>
                    </div>
                    <div class="post-single-content">
                        {!! $post->content !!}
                    </div>
                    <div class="post-single-bottom">
                        @if ($post->tags_count > 0)
                        <div class="tags">
                            <p>Tags:</p>
                            <ul class="list-inline">
                                @foreach ($post->tags as $tag)
                                <li>
                                    <a href="{{ route("frontend.tag", $str::slug($tag->name)) }}">{{ $tag->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="social-media">
                            <p>Share on:</p>
                            <ul class="list-inline">
                                <li>
                                    <a href="{{ request()->url() }}"><i class="fab fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="{{ request()->url() }}"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="{{ request()->url() }}"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="{{ request()->url() }}"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="{{ request()->url() }}"><i class="fab fa-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- @include("frontend.post.inc.author")
                    @include("frontend.post.inc.comment") --}}
                </div>
            </div>
            <div class="col-md-4">
                <div class="related-post">

                    <h4>Related Posts</h4>
                    <hr />
                    @for ($i = 0; $i < count($postAll); $i++ )
                    <div class="allRelatedPostContainer">
                        <div class="realtedArticle"> 
                            <a href="{{ asset("post/".$postAll[$i]->slug) }}">                       
                                <div class="row">
                                    <div class="col-md-4">
                                        <img class="w-100" src="{{ asset("uploads/post/".$postAll[$i]->thumbnail) }}" alt="{{ $post->title }}"/>
                                    </div>
                                    <div class="col-md-8">
                                        <p class="maxLine2">
                                            {!! $post->content !!}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{-- end of allRelatedPostContainer --}}
                    </div>
                    {{-- end of realtedArticle --}}                        
                    @endfor 
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
