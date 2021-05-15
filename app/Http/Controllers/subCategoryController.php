<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Services\PayUservice\Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\subCategory;
use App\Gallery;
use Session;

class subCategoryController extends Controller
{
    public function __construct(subCategory $subCategory, Gallery $gallery)
    {
        $this->exception = 'home';
        $this->subCategory = $subCategory;
        $this->gallery = $gallery;

    }


    public function catTable($cat)
    {
            $category = Gallery::where('slug', $cat)->first();
            $sub_cat =  $category->id;

            $subCategories = $this->subCategory->getAllImageList($sub_cat);

            return view('dashboard.gallery.cat_table', compact('subCategories','cat','sub_cat'));

    }
    public function getCategory($catogerySlug)
    {
        $category = Gallery::where('slug', $catogerySlug)->first();
        $cat_id =  $category->id;
        return $cat_id;

    }


    public function add(Request $request)
    {

        if($request->isMethod('post')){

            $validator = $this->getValidateSubCategory($request->all());

            if($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            if($this->subCategory->saveSubCategory($request)){
                Session::flash('msg','Image successfully save');
                Session::flash('alert-class','success');
                $category = Gallery::where('id', $request->category_id)->first();
                $cat = $category->slug;
                return redirect()->route('cat_table', compact('cat'));
            }else{
                Session::flash('msg','Unable to add Image.');
                Session::flash('alert-class','danger');
                return redirect()->route('cat_table');
            }
        }
        $allImageList = $this->subCategory->getAllImageList($request->id);

        // return view('dashboard.gallery.cat_table', compact('gallery'));

    }

    public function subCategoryDelete($cat,$id)
    {
        $cat = $cat;
        subCategory::where('id',$id)->delete();
        return redirect()->route('cat_table', compact('cat'));
    }

     protected function getValidateSubCategory($data)
    {
        $rules = [
            'name' => 'required',
            'img_url' => 'required',
        ];
        $errmsg = [
            'name.required' => 'Please enter Image name',
            'img_url.required' => 'Please upload image',
        ];
        return Validator::make($data, $rules, $errmsg);
    }
}
