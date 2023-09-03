<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        return view('crud.brand.create');
    }
    public function saveBrand(Request $request){
        Brand::saveBrand($request);
        return back();
    }
    public function allBrand(){
        return view('crud.brand.read',[
            'brands'=>Brand::all()
        ]);
    }
    public function status($id){
        $brand = Brand::find($id);
        if($brand->status == 1){
            $brand->status = 0;
        }else{
            $brand->status = 1;
        }
        $brand->save();
        return back();
    }
    public function editBrand($id){
        return view('crud.brand.edit',[
            'brand'=>Brand::find($id)
        ]);
    }
    public function updateBrand(Request $request){
        Brand::updateBrand($request);
        return redirect('all-brand');

    }
//    public function deleteBrand($id){
//        $this->brand = Brand::find($id);
//        $this->brand->delete();
//        return back();
//    }
    public function deleteBrand(Request $request){
        $this->brand = Brand::find($request->id);
        $this->brand->delete();
        return back();
    }
}
