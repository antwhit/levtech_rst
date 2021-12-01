<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function createcategory()
    {
        return view('posts/createcategory');
    }
    public function storecategory(Request $request, Category $category)
    {
        $input = $request['category'];
        $category->fill($input)->save();
        return redirect('/posts/createcategory');
    }
}
?>