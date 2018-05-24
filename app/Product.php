<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Связь один-к-многим Продукт с Категорией
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
    
    
    public function presentPrice() {
        return money_format('$%i', $this->price / 100);
    }
    
    //префикс scope позволяет вызывать функцию MightAlsoLike статически, как свойство класса Product - !!!
    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    } 
}
