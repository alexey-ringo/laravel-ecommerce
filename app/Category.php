<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Из-за пересечения имен с Voyager переименовал таблицу из categories в category
    protected $table = 'category';
    
    //Связь один-к-многим Категория с Продуктом
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
