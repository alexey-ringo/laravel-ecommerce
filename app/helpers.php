<?php
function presentPrice($price)
{
    return money_format('$%i', $price / 100);
}

//Установка  css-класса активной категории на странице магазина для выбранной категории
function setActiveCategory($category, $output = 'active')
{
    return request()->category == $category ? $output : '';
}

function productImage($path) {
    return $path && file_exists('storage/' . $path) ? asset('storage/' . $path) : asset('img/not-found.jpg');
    
    
}
