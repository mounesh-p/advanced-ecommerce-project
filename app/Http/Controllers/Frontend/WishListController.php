<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.wishlist.index');
    }


    public function wishlist()
    {
        $wishlist = WishList::with('product')->where('user_id',Auth::id())->latest()->get();

        return response()->json($wishlist);
    }

    public function AddToWishList(Request $request, $product_id)
    {
        if(Auth::check())
        {
            $exist = WishList::where('user_id',Auth::id())->where('product_id',$product_id)->first();

            if(!$exist)
            {
                $data = new WishList();
                $data->user_id = Auth::id();
                $data->product_id = $product_id;
                $data->save();

                return response()->json(['success' => 'Product added to Wishlist']);
            }
            else
            {
                return response()->json(['error' => 'This Product already existed in wishlist']);

            }
        }
        else
        {
            return response()->json(['error' => 'Login Firsrt']);
        }
    }

    public function wishlistRemove($id)
    {
        WishList::where('user_id',Auth::id())->where('id',$id)->delete();

        return response()->json(['success' => 'Wishlist Removed']);

    }

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
