<?php
namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function show($id)
    {
        $category = Category::find($id)->posts;
        return view('category', ['course'=>$category]);
    }

    public function links(Category $category){
        return view('categories', ['category'=>$category->all()]);
    }

    public function create(Request $request)
    {
        $category_info = $request->all();

        Category::create([
            "title" => $category_info["title_category"],
        ]);
        return redirect()->back();
    }
}
