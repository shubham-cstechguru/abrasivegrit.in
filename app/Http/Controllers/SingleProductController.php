<?php

namespace App\Http\Controllers;
use App\Model\Category;
use App\model\Technology;
use App\model\Faq;

use Illuminate\Routing\Controller as BaseController;

class SingleProductController extends BaseController {
    public function index(Technology $slug) {
        $category1   = Category::with(['product'])->has('product')->get();
        
        $faq   = Faq::where('parent','=', $slug->parent)->get()->toArray();
        $data = Technology::where('id','!=', $slug->id)->paginate(4)->toArray();
        $list = compact('slug','data','category1','faq');
    	return view('frontend.pages.single-product',$list);
    }
}
