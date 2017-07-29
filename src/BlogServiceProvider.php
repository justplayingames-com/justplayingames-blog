<?php

namespace JustPlayinGames\Blog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;


class BlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        /* configuration */
        $this->publishes([
            __DIR__.'/../config/justplayingames-blog.php' => config_path('justplayingames-blog.php'),
        ], 'config');

        $this->mergeConfigFrom(__DIR__.'/../config/justplayingames-blog.php', 'justplayingames-blog');

        /* views */
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'justplayingames-blog');

        $this->publishes([
            __DIR__.'/path/to/views' => resource_path('views/vendor/justplayingames-blog'),
        ]);

        /* database */
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        if (! class_exists('CreateBlogPostTable')) {
            $timestamp = date('Y_m_d_His', time());

            $this->publishes([
                __DIR__.'/../database/migrations/create_blog_posts_table.php.stub' => database_path("/migrations/{$timestamp}_create_blog_post_table.php"),
            ], 'migrations');
        }
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
       /*
        * Register service providers for the dependencies.
        */
        $this->app->register('Parsedown\Providers\ParsedownServiceProvider');

        $this->app->router->group(
            ['namespace' => 'JustPlayinGames\Blog\Http\Controllers\Web'], 
            function($router) {
                require (__DIR__ . '/../routes/web.php');
            }
        );
    }
}
