<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $categories = [
            [
                "name" => "Men",
                "desc" => "Discover our latest men's collection featuring comfortable knitwear, stylish outerwear, and essential basics.",
                "image" => "https://plus.unsplash.com/premium_photo-1669850858863-6fe7bf233483?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            ],
            [
                "name" => "Women",
                "desc" => "Explore our women's collection with contemporary designs, luxurious materials, and versatile pieces for every occasion.",
                "image" => "https://plus.unsplash.com/premium_photo-1689371956254-1a8adca96b78?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            ],
            [
                "name" => "Kids",
                "desc" => "Browse our kids' collection with comfortable, playful, and durable clothing perfect for active children.",
                "image" => "https://plus.unsplash.com/premium_photo-1697612942566-e0c243ab512c?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            ],
        ];
        $faqs = [
            [
                "question" => "What is the return policy?",
                "answer" => "We accept returns within 30 days of purchase. Please note that the item must be returned in new condition with original packaging.",
            ],
            [
                "question" => "Do you offer gift cards?",
                "answer" => "Yes, we offer gift cards for purchase online and in-store.",
            ],
            [
                "question" => "Can I track my order?",
                "answer" => "Yes, you can track your order by logging into your account or by using the tracking link provided in your shipping confirmation email.",
            ],
            [
                "question" => "What payment methods do you accept?",
                "answer" => "We accept all major credit cards, PayPal, and Apple Pay.",
            ],
        ];
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
        return view('layouts.app', compact('products', 'navItems', 'faqs', 'categories'));
    }
}
