<?php

return [
    'models' => [
        'blog-post' => '\JustPlayinGames\Blog\Models\BlogPost'
    ],
    'layout' => 'layouts.app.blog',
    'components' => [
        'index' => 'components.app.blog.index'
    ],
    'partials' => [
        'blog-post' => 'partials.app.blog.blog-post'
    ]
];
