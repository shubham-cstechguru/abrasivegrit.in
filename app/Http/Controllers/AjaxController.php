<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\model\Inquiry;

class AjaxController extends BaseController {
    
    
    
    public function index(Request $request) {
        
     $data = new Inquiry();
     $data->user_name = $request->name;
     $data->user_email = $request->email;
     $data->user_country = $request->country;
     $data->user_mobile = $request->user_mobile;
     $data->user_message = $request->message;
     
     if($data->save()){
           return response()->json(['status'=>1]);
     }
     else{
            return response()->json(['status'=>0]);
     }
        
    }
}