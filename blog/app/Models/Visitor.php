<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Visitor extends Model
{
    use HasFactory;
    private static $visitor;
    public static function saveVisitor($request){
        self::$visitor = new Visitor();
        self::$visitor->name     =$request->name;
        self::$visitor->email    =$request->email;
        self::$visitor->password =bcrypt($request->password);
        self::$visitor->save();
        Session::put('visitorID',self::$visitor->id);
        Session::put('visitorName',self::$visitor->name);
//        Session::put('visitoremail',self::$visitor->email);
//        Session::put('visitorPassword',self::$visitor->password);
    }
}
