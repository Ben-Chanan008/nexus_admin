<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function index()
    {
        return view('categories', ['category' => Categories::all()]);
    }

    public function store(Request $request)
    {
        $form_fields = $request->validate([
            'icon' => 'required',
            'category_name' => 'required',
        ]);

        Categories::create($form_fields);

        return redirect('/categories');

    }

}
