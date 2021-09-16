@extends('layouts.app')
@section('content')

    <div class="col-lg-9 col-12">
        <div class="blog-page">
            @forelse($posts as $post)
                <article class="blog__post d-flex flex-wrap">
                    <div class="thumb">
                        <a href="{{ route('frontend.', $post->slug) }}">
                            @if($post->media->count() > 0)
                                <img src="{{ asset('assets/posts/' . $post->media->first()->file_name) }}" alt="{{ $post->title }}">
                            @else
                                <img src="{{ asset('assets/posts/default.jpg') }}" alt="blog images">
                            @endif
                        </a>
                    </div>
                    <div class="content">
                        <h4><a href="{{ route('frontend.', $post->slug) }}">{{ $post->title }}</a></h4>
                        <ul class="post__meta">
                            <li>Posts by : <a href="{{ route('frontend.author.posts', $post->user->username) }}" title="Posts by {{ $post->user->name }}">{{ $post->user->name }}</a></li>
                            <li class="post_separator">/</li>
                            <li>{{ $post->created_at->format('M d Y') }}</li>
                        </ul>
                        <p>{!! \Illuminate\Support\Str::limit($post->description, 145, '...') !!}</p>
                        <div class="blog__btn">
                            <a href="{{ route('frontend.', $post->slug) }}">read more</a>
                        </div>
                    </div>
                </article>
            @empty
                <div class="text-center">No Posts found</div>
            @endforelse
        </div>
        {!! $posts->appends(request()->input())->links() !!}
    </div>

    <div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
        @include('partial.frontend.sidebar')
    </div>

@endsection
