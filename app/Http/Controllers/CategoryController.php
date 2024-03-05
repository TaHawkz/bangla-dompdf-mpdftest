<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categories = Category::get();
        $categories = Category::where('status',"ACTIVE")
        ->orderBy('category_name')
        ->take(100)
        ->get();

        return view('category.category-index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Auth::user()->name;
        return view('category.category-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => ['required', 'string', 'max:255'],
        ]);

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $category = Category::findOrFail($id);

        return view('category.category-edit', compact('category'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => ['required', 'string', 'max:255'],
        ]);
        $category = Category::findOrFail($id);
        $category->category_name = $request->category_name;
        $category->save();

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('category.index');
    }
}