<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.news.new')->with('news', $news);
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.news.new_create')->with('categories', $categories);
    }
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'title' => 'required',
                'categories' => 'required',
                'content' => 'required'
            ],
            [
                'title.required' => 'Title is required',
                'categories.required' => 'Category is required',
                'content.required' => 'Content is required'
            ]);
        $news = new News();
        $news->category_id = $request->categories;
        $news->title = $request->title;
        $news->summary = $request->summary;
        $news->content = $request->content;

        if ($request->featured == '') {
           $news->featured = 0;
        }
        else{
            $news->featured = $request->featured;
        }

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = $file->getClientOriginalName();
            $file->move('uploads/',$filename);
            $news->thumbnail = $filename;
        }
        else{
            $news->thumbnail = '';
        }

        $news->save();
        return redirect('news')->with('message', 'Add new success');
    }
    public function edit($id)
    {
        $news = News::find($id);
        $categories = Category::all();
        return view('admin.news.new_edit', ['news' => $news, 'categories' => $categories]);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'title' => 'required',
                'categories' => 'required',
                'content' => 'required'
            ],
            [
                'title.required' => 'Title is required',
                'categories.required' => 'Category is required',
                'content.required' => 'Content is required'
            ]);
        $news = News::find($id);
        $news->category_id = $request->categories;
        $news->title = $request->title;
        if ($request->summary == '') {
           $news->summary = '';
        }
        else{
            $news->summary = $request->summary;
        }
        $news->content = $request->content;
        if ($request->featured == '') {
           $news->featured = 0;
        }
        else{
            $news->featured = $request->featured;
        }

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = $file->getClientOriginalName();
            $file->move('uploads/',$filename);
            $news->thumbnail = $filename;
        }
        else{
            $news->thumbnail;
        }
        $news->save();
        return redirect('news')->with('message', 'Update success');
    }
    public function destroy($id)
    {
        $new = News::find($id);
        $new->delete();
        return redirect('news')->with('message', 'Delete success');
    }
}
