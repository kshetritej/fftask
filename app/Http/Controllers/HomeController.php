<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $products = [
            [
                "name" => "Classic Leather Jacket",
                "description" => "A timeless piece for any wardrobe. Made from high-quality genuine leather.",
                "image_url" => "https://media.istockphoto.com/id/157692462/photo/front-of-black-leather-jacket-isolated-on-white-w-clipping-path.jpg?s=2048x2048&w=is&k=20&c=fP28M4zHUUiWbJP2uDuWM7tmxPZQ7BDQXfeB4k3Om40=",
                "price" => 199.99,
            ],
            [
                "name" => "Casual Denim Jeans",
                "description" => "Comfortable and versatile denim jeans for everyday wear. Available in various washes.",
                "image_url" => "https://images.pexels.com/photos/1082529/pexels-photo-1082529.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1", // Pexels
                "price" => 79.99,
            ],
            [
                "name" => "Elegant Silk Dress",
                "description" => "Make a statement in this flowing silk dress. Ideal for special occasions.",
                "image_url" => "https://images.pexels.com/photos/1080690/pexels-photo-1080690.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1", // Pexels
                "price" => 249.99,
            ],
            [
                "name" => "Sporty Running Shoes",
                "description" => "Lightweight and breathable running shoes for optimal performance and comfort.",
                "image_url" => "https://images.pexels.com/photos/2529148/pexels-photo-2529148.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1", // Pexels
                "price" => 99.99,
            ],
            [
                "name" => "Cozy Knit Sweater",
                "description" => "Stay warm and cozy in this soft knit sweater. Perfect for layering.",
                "image_url" => "https://images.pexels.com/photos/991490/pexels-photo-991490.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1", // Pexels
                "price" => 69.99,
            ],
            [
                "name" => "Summer Beach Hat",
                "description" => "Protect yourself from the sun in style with this wide-brimmed beach hat.",
                "image_url" => "https://images.pexels.com/photos/1124465/pexels-photo-1124465.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1", // Pexels
                "price" => 29.99,
            ],
        ];
        $navItems = [
            [
                "name" => "Men",
                "url" => "/men",
            ],
            [
                "name" => "Women",
                "url" => "/women",
            ],
            [
                "name" => "Kids",
                "url" => "/kids",
            ],
            [
                "name" => "New & Featured",
                "url" => "/new",
            ],
            [
                "name" => "Gift",
                "url" => "/gift",
            ]
        ];
        return view('layouts.app', compact('products', 'navItems'));
    }
}
