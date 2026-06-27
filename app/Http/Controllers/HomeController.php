<?php

namespace App\Http\Controllers;
use App\Models\Category; 
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Получаем только активные категории, отсортированные по имени
        $categories = Category::where('is_active', true)
                              ->orderBy('name')
                              ->get();

        // Передаем переменную $categories в представление 'home'
        return view('home', compact('categories'));
    }
}
