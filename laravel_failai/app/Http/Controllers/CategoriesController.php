<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function create()
    {
    }

    public function store()
    {

    }

    public function show(Category $category)
    {
        return $category;
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
