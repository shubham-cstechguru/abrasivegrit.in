<?php

namespace App\Http\Controllers\admin;

// use Intervention\Image\ImageManagerStatic as Image;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\model\Inquiry;

class InquiryController extends Controller{
   
   public function inquiry(request $request){



        $query = Inquiry::latest();

        if( !empty( $request->user_name ) ) {
            $query->where('user_name', 'LIKE', '%'.$request->user_name.'%');
        }


        $lists1 = $query->paginate(15);
        //
        

        

        $data = compact( 'lists1' ); // Variable to array convert
        return view('backend.inc.inquiry', $data);
    }
    public function remove(  $id ){
            $remove = Inquiry::where('id',$id)->delete();
            return redirect( url('admin-control/inquiry') )->with('success', 'Success! A record has been deleted.');   
        }
    public function change_status(Request $request, Inquiry $id)
        {
            $id->update([ $request->field => $request->status ]);
            
    
            return redirect()->back()->with('success', "{$request->field} status has been changed.");
        }
}