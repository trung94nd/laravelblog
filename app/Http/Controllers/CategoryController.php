<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.category')->with('categories', $categories);
    }
    public function create()
    {
        return view('admin.categories.category_create');
    }
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required'
            ],
            [
                'name.required' => 'Title is required'
            ]);
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect('categories')->with('message', 'Add new success');
    }
    public function edit($id)
    {
        $categories = Category::find($id);
        return view('admin.categories.category_edit', ['category' => $categories]);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'name' => 'required'
            ],
            [
                'name.required' => 'Title is required'
            ]);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect('categories')->with('message', 'Update success');
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('categories')->with('message', 'Delete success');
    }
}
