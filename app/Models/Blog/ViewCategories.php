<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class ViewCategories extends Model
{
    // Укажите имя таблицы (представления)
    protected $table = 'v_categories';

    // Отключите возможность автоматического обновления временных меток
    public $timestamps = false;

    // Если у вас нет первичного ключа, отключите его
    protected $primaryKey = null;

    // Укажите, что у вас нет автоинкремента
    public $incrementing = false;
}
