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