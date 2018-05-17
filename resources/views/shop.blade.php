@extends('layouts.layout')

@section('title', 'Products')

@section('extra-css')

@endsection

@section('title', 'Products')



@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Shop</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="products-section container">
        <div class="sidebar">
            <h3>By Category</h3>
            <ul>
                <li><a href="#">Laptops</a></li>
                <li><a href="#">Desctops</a></li>
                <li><a href="#">Mobile Phone</a></li>
                <li><a href="#">Tablets</a></li>
            </ul>
        </div> <!-- end sidebar -->
        <div>
            <div class="products-header">
                <h1 class="stylish-heading">Laptops</h1>
                <div>
                    <strong>Price: </strong>
                    <a href="#">Low to High</a> |
                    <a href="#">High to Low</a>

                </div>
            </div>

            <div class="products text-center">
                @foreach ($products as $product)
                    <div class="product">
                        <a href=""><img src="" alt="product"></a>
                        <a href=""><div class="product-name">{{ $product->name }}</div></a>
                        <div class="product-price">{{ $product->presentPrice() }}</div>
                    </div>
                @endforeach
                    
            </div> <!-- end products -->

            <div class="spacer"></div>
            
        </div>
    </div>


@endsection