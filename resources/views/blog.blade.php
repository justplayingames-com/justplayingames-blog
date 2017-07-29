@foreach ($blog_posts as $blog_post)
<div>
<pre>{{ $blog_post->text}}</pre>
</div>
@endforeach