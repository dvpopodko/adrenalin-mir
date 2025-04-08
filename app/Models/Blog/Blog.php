<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Blog extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable =  ['title', 'description', 'user_id', 'article', 'important', 'image_first', 'image_second', 'lang'];
    public function subtypes()
    {
        return $this->belongsToMany(BlogSubtype::class, 'blog_subtype_lu', 'blog_id', 'blog_subtype_id');
    }

    /**
     * Мутатор для поля article.
     *
     * @param string $value
     * @return void
     */
    public function setArticleAttribute($value)
    {
        // Удаляем атрибуты width и height из тегов <img>
        $value = preg_replace('/(<img[^>]+)(width|height)="[^"]+"/i', '$1', $value);

        // Устанавливаем измененное значение
        $this->attributes['article'] = $value;
    }
}
