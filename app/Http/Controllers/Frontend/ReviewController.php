<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function ReviewStore(Request $request){

    	$product = $request->product_id;

    	$request->validate([

    		'summary' => 'required',
    		'comment' => 'required',
    	]);

    	Review::insert([
    		'product_id' => $product,
    		'user_id' => Auth::user()->id,
    		'rating' => $request->quality,
    		'comment' => $request->comment,
    		'summary' => $request->summary,
    		'created_at' => Carbon::now(),

    	]);

    	$notification = array(
			'message' => 'Review Will Approve By Admin',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);


    }

    public function PendingReview()
    {

    	$review = Review::orderBy('id','DESC')->get();
    	return view('admin.review.pending',compact('review'));

    } // end method

    public function ReviewApprove($id){

        $data = Review::find($id);
        if($data->status == 0)
        {
            $data->status = 1;
        }
        elseif($data->status == 1)
        {
            $data->status = 0;
        }
        $data->save();

    	$notification = array(
            'message' => 'Review Status Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // end mehtod

    public function deleteReview($id)
    {
        $data = Review::find($id);
        $data->delete();

        return redirect()->back()->with('message','Review Deleted Successfully');
    }
}
