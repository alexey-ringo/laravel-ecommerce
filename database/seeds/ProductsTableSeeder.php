<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Laptops
        
            Product::create([
                'name' => 'Laptop 1',
                'slug' => 'laptop-1',
                'details' => '15 inch, 1TB SSD, 32GB RAM',
                'price' => 149999,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
       
            Product::create([
                'name' => 'Laptop 2',
                'slug' => 'laptop-2',
                'details' => '17 inch, 2TB SSD, 16GB RAM',
                'price' => 256509,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
        
        
        
            Product::create([
                'name' => 'Laptop 3',
                'slug' => 'laptop-3',
                'details' => '17 inch, 4TB SSD, 32GB RAM',
                'price' => 326049,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
        
            Product::create([
                'name' => 'Laptop 4',
                'slug' => 'laptop-4',
                'details' => '19 inch, 8TB SSD, 32GB RAM',
                'price' => 149999,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
        
        
        
            Product::create([
                'name' => 'Laptop 5',
                'slug' => 'laptop-5',
                'details' => '15 inch, 16TB SSD, 32GB RAM',
                'price' => 149999,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
        
            Product::create([
                'name' => 'Laptop 6',
                'slug' => 'laptop-6',
                'details' => '17 inch, 2TB SSD, 32GB RAM',
                'price' => 205099,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
        
            Product::create([
                'name' => 'Laptop 7',
                'slug' => 'laptop-7',
                'details' => '19 inch, 4TB SSD, 16GB RAM',
                'price' => 150000,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
        

    }
}
