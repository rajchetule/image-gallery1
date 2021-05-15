<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Services\PayUservice\Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Gallery;
use Session;
use File;

class GalleryController extends Controller
{
    public function __construct(Gallery $gallery)
    {
        $this->exception = 'home';
        $this->gallery = $gallery;
    }


    public function index(Request $request)
    {

            if($request->isMethod('post')){

                $validator = $this->getValidateGallery($request->all());

                if($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }
                if($this->gallery->saveGallery($request)){
                    Session::flash('msg','Category successfully save');
                    Session::flash('alert-class','success');
                    return redirect()->route('gallery-card');
                }else{
                    Session::flash('msg','Unable to add Category.');
                    Session::flash('alert-class','danger');
                    return redirect()->route('gallery-card');
                }
            }
            $allGalleryList = $this->gallery->getAllGalleryList();
            return view('dashboard.gallery.index', compact('allGalleryList'));

    }



    public function edit(Request $request, $id)
    {
        try {
            $gallery = Gallery::findOrFail($id);
            if ($request->isMethod('post')) {
                if ($this->gallery->editGallery($gallery, $request)) {
                    return redirect()->route('gallery-card');
                }
            }
            // return view('dashboard.gallery.index', compact('gallery'));
            return response()->json([$gallery], 200);
        } catch (\Exception $e) {
            return redirect()->route($this->exception)->with('warning', $e->getMessage());
        }
    }

    public function galleryDelete($cid)
    {
        try {

            $destinationPath = public_path('/images/'.$folder);
            Gallery::where('id', $cid)->delete($destinationPath);

            return redirect()->route('gallery-card');
        } catch (\Exception $e) {
            return redirect()->route($this->exception)->with('warning', $e->getMessage());
        }
    }
    protected function getValidateGallery($data)
    {
        $rules = [
            'category_name' => 'required',
            'img_url' => 'required',
        ];
        $errmsg = [
            'category_name.required' => 'Please enter category name',
            'img_url.required' => 'Please upload image',
        ];
        return Validator::make($data, $rules, $errmsg);
    }
}
