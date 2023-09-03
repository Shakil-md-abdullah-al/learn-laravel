<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function League\Flysystem\move;

class Blog extends Model
{
    private static $blog,$image,$imgUrl,$directory,$imageName,$str;
    use HasFactory;
    public static function saveBlog($request){
        self::$blog = new Blog();
        self::$blog->category = $request->category;
        self::$blog->title = $request->title;
        self::$blog->slug = self::makeSlug($request);
        self::$blog->image = self::saveImage($request);
        self::$blog->description = $request->description;
        self::$blog->blog_type = $request->blog_type;
        self::$blog->date = $request->date;
        self::$blog->status = $request->status;
        self::$blog->save();

    }

//    private static function updateBlog($request,$id){
//        self::$blog = Blog::find($id);
//        self::$blog->category = $request->category;
//        self::$blog->title = $request->title;
////        self::$blog->slug = self::makeSlug($request);
//
//        if($request->file('image')){
//            if(file_exists(self::$blog->image)){
//                unlink(self::$blog->image);
//                self::$blog->image = self::saveImage($request);
//            }else{
//                self::$blog->image = self::saveImage($request);
//            }
//        }
//
//        self::$blog->description = $request->description;
//        self::$blog->blog_type = $request->blog_type;
//        self::$blog->date = $request->date;
//        self::$blog->status = $request->status;
//        self::$blog->save();
//
//
//        self::$slider->save();
//    }

    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'asset/image/blog/';
        self::$imgUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imgUrl;
    }

    private static function makeSlug($request){
        if($request->slug){
            self::$str = $request->slug;
            return preg_replace('/\s+/u','-',trim(self::$str));
        }
        self::$str = $request->title;
        return preg_replace('/\s+/u','-',trim(self::$str));

    }

}
