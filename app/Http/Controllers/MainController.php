<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class MainController extends Controller
{
    public function index() {
        $categories = Category::query()->get();
        return view('index', compact('categories'));
    }

    public function categories() {
        $categories = Category::query()->get();
        return view('categories', compact('categories'));
    }

    public function category($code) {
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }

    public function product($product = null) {
        return view('product', ['product' => $product]);
    }

    public function basket() {
        return view('basket');
    }

    public function basketPlace() {
        return view('orders');
    }
}
