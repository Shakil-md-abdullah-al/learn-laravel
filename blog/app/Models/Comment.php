<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    private static $comment;
    use HasFactory;

    public static function saveComment($request){
        self::$comment = new Comment();
        self::$comment->visitor_id =$request->visitor_id;
        self::$comment->blog_id =$request->blog_id;
        self::$comment->message =$request->message;
        self::$comment->save();
    }
}
