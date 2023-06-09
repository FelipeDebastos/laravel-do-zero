<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('site/category/index');
    }

   
    public function show(string $slug)
    {
        return view('site/category/show', ['slug' => $slug]);

    }

    public function update(Request $request, string $id)
    {
        
    }
}
