<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    private static $slider,$image,$imageNewName,$imgUrl,$directory;
    use HasFactory;
    public static function saveSlider($request){
        self::$slider = new Slider();
        self::$slider->heading =$request->heading;
        self::$slider->description =$request->description;
        self::$slider->image = self::saveImage($request);
        self::$slider->save();
    }

    public static function updateSlider($request,$id){
        self::$slider = Slider::find($id);
        self::$slider->heading =$request->heading;
        self::$slider->description =$request->description;

        if($request->file('image')){
            if(file_exists(self::$slider->image)){
                unlink(self::$slider->image);
                self::$slider->image = self::saveImage($request);
            }else{
                self::$slider->image = self::saveImage($request);
            }
        }
        self::$slider->save();
    }

    public static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'admin-assets/upload/slider/';
        self::$imgUrl = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory,self::$imageNewName);
        return self::$imgUrl;

    }


}
