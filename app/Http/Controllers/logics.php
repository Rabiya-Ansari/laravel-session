<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logics extends Controller
{
    public function productsData()
    {

        $products = [
            ["id" => 1, "image" => "../image/product1.PNG", "title" => "Apple 16 Pro Max Black Metalic", "category" => "mobile", "price" => 9.99],
            ["id" => 2, "image" => "../image/product2.PNG", "title" => "HP Pavilion x360", "category" => "laptop", "price" => 9.99],
            ["id" => 3, "image" => "../image/product3.PNG", "title" => "Smart watch with helth tracker", "category" => "watch", "price" => 9.99],
            ["id" => 4, "image" => "../image/product4.PNG", "title" => "Dell XPS Smart Touch", "category" => "laptop", "price" => 9.99],
            ["id" => 5, "image" => "../image/product5.PNG", "title" => "Apple 16 Pro Max Rose Gold", "category" => "Mobile", "price" => 9.99],
            ["id" => 6, "image" => "../image/product6.PNG", "title" => "Apple Watch Ultra With Multi Belts", "category" => "watch", "price" => 9.99]
        ];

        return view("cards", compact("products"));
    }
}
