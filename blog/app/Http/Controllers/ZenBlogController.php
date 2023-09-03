<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;
use DB;

class ZenBlogController extends Controller
{
    public function index(){
        $blog = DB::table('blogs')
            ->join('categories','blogs.category','categories.id')
            ->select('blogs.*','categories.*')
            ->where('blogs.status',1)
            ->get();
//        dd(Category::all());
        return view('frontEnd.home.home',[
            'sliders'=> Slider::all(),
            'blogs' =>$blog,
            'categories'=>Category::all()
        ]);
    }
    public function about(){
        return view('frontEnd.about.about');
    }
    public function contact(){
        return view('frontEnd.contact.contact');
    }
    public function singlePost($slug){
        $blog = Blog::where('slug',$slug)->first();

        $blogCatId = $blog->category;

//        $relatedBlog = Blog::where('category',$blogCatId)->orderby('id','desc')->take(5)->get();

        $relatedBlog = DB::table('blogs')
            ->join('categories','blogs.category','categories.id')
            ->select('blogs.*','categories.category_name')
            ->where('blogs.category',$blogCatId)
            ->orderby('id','desc')->take(5)->get();
//dd($relatedBlog);


        $comments = DB::table('comments')
            ->join('visitors','comments.visitor_id','visitors.id')
            ->select('comments.*','visitors.name')
            ->where('comments.blog_id',$blog->id)
            ->get();
//        dd($comments);
        return view('frontEnd.blog.blog-details',[
            'blog'=>$blog,
            'comments'=>$comments,
            'relatedBlogs'=>$relatedBlog,
            $categoryName= Category::all(),
            'categories'=>$categoryName
        ]);
    }

    public function categoryBlog($id){
        $categoryBlog = DB::table('blogs')
            ->join('categories','blogs.category','categories.id')
            ->select('blogs.*','categories.category_name')
            ->where('blogs.category',$id)
            ->orderby('id','desc')->take(5)->get();

        return view('frontEnd.blog.blog-category',[
        'categoryBlog'=>$categoryBlog,
            'sliders'=> Slider::all(),
            ]);
    }
}
