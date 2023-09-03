<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.slider.manage-slider',[
            'sliders'=>Slider::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.add-slider');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Slider::saveSlider($request);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.slider.edit-slider',[
            'sliders'=> Slider::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Slider::updateSlider($request,$id);
        return redirect('sliders');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::find($id);
        if($slider->image){
            if(file_exists($slider->image)){
                unlink($slider->image);
            }
        }
        $slider->delete();
        return back();
    }
}
