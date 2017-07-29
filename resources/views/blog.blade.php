@extends(config('justplayingames-blog.layout'))

@component(config('justplayingames-blog.components.index'))
@foreach ($blog_posts as $blog_post)
@include(config('justplayingames-blog.partials.blog-post'))
@endforeach
@endcomponent
