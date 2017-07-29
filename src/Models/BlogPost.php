<?php

namespace JustPlayinGames\Blog\Models;

use Illuminate\Database\Eloquent\Model;


class BlogPost extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text'
    ];
}
