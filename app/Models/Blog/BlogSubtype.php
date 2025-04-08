<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class BlogSubtype extends Model
{
    protected $fillable = ['typeid', 'description'];

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_subtype_lu', 'blog_subtype_id', 'blog_id');
    }
}
