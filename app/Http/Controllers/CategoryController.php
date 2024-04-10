<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Faker\Guesser\Name;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('category.index',compact('categories'));
    }

    public function create()
    {
        return view('category.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required | max: 15 |string',
            'description'=> 'required|max:100| string',
        ]);

        Category::create([
            'title' => $request->title,
            'description'=> $request->description,
        ]);
        return redirect('categories/create')->with('status','Category Created');
    }

    public function edit( int $id)
    {
        $category = Category:: findOrFail($id);
        return view('category.edit',compact('category'));
    }

    public function update(Request $request , int $id)
    {
        // dd($request->all(), $id);

        $test = DB::table('categories')  ->where([
            ['id', '=', $id],
        ])
        ->update([
            'title' => $request->title,
            'description'=> $request->description,
        ]);
        return redirect()->back()->with('status','Category Updated');
        
    }

    public function destroy(int $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('status','Category Deleted');
    }
}
