<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Gallery;
use DB;

class subCategory extends Model
{
     protected $table = 'sub_categories';

    protected $fillable = [
       'category_id', 'name', 'img_url',
    ];



    public function getAllImageList($cat_id)
    {

        return subCategory::where('category_id', $cat_id)->where('is_deleted', 0)->get();
    }

    public function saveSubCategory(Request $request)
    {
        $category = Gallery::where('id', $request->category_id)->first();
        $folder_name = $category->slug;


        $saveResult = false;
        DB::beginTransaction();

        $data = $request->only('name');
        $data['category_id'] = $request->category_id;
        $data['img_url'] = $this->imageupload($request->file('img_url'), $folder_name);

        $saveResult = subCategory::create($data);
        if($saveResult){
            DB::commit();
        }else{
            DB::rollBack();
        }
        return $saveResult;
    }

    protected function imageupload($selectedimage, $folder){
        $imgpath = null;
        $image = $selectedimage;
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/'.$folder);
        if($image->move($destinationPath, $input['imagename'])){
            $imgpath = url('/images/'.$folder)."/".$input['imagename'];
        }
        return $imgpath;
    }
}
