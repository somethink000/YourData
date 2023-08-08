<?php

namespace App\Http\Controllers\Services;

use App\Models\Objection;
use Illuminate\Support\Str;


class ObjectionService
{
    public function All()
    {
        $result = Objection::all();
        return $result;
    }
    // public function GetBlog($id)
    // {
    //     $blog = Objection::find($id);
    //     return $blog;
    // }
    // public function CreateBlog($request,$id)
    // {
    //     $review = new Blog();
    //     $review->member_id=$id;
    //     $review->title=$request->input('title');
    //     $review->code=$request->input('code');
    //     $review->text=$request->input('text');
        
    //     $review->save();
  
  
    // }
   
    // public function UpdateBlog($request,$comment)
    // {
    //     $data = $request->all();
    //     $result = $blog->fill($data)->save();

    //     return $result;
    // }


    
    // public function DeleteBlog($id)
    // {
    //     $blog = Blog::destroy($id);
    //     return $blog;
    // }
}