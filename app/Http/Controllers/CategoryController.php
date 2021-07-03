<?php

namespace App\Http\Controllers;
use App\Model\Category;
use App\model\Technology;

use Illuminate\Routing\Controller as BaseController;

class CategoryController extends BaseController {
    public function index(Category $category) {
        $category1   = Category::with('product')->get();
        
        $cat_name = $category->category;
        $cat_des = $category->excerpt;
        
        $data = Technology::where('parent', $category->id)->paginate(15);
        $list = compact('data','category1','cat_name','cat_des');
    	return view('frontend.pages.category', $list);
    }
}
