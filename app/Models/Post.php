<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the route key for the Post
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
