<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Session;

class VisitorController extends Controller
{
    private static $visitorInfo,$visitorOldPass;
    public function index(){
        return view('frontEnd.visitor.register-form');
    }
    public function saveVisitor(Request $request){
//        return $request;
        Visitor::saveVisitor($request);
        return back();
    }

    public function visitorLogout(){
        Session::forget('visitorID');
        Session::forget('visitorName');
        return back();
    }

    public function loginVisitor(){
        return view('frontEnd.visitor.login-form');
    }

    public function checkVisitor(Request $request){
        //get() --> 2D array and first()-->1D array --> for single data

        self::$visitorInfo = Visitor::where('email',$request->email)->first();
        if(self::$visitorInfo){

            self::$visitorOldPass=self::$visitorInfo->password;

            if(password_verify($request->password,self::$visitorOldPass)){
                Session::put('visitorID',self::$visitorInfo->id);
                Session::put('visitorName',self::$visitorInfo->name);
                return back()->with('message','Success');
            }
            else{
                return back()->with('message','Invalid Password');
            }
        }else{
            return back()->with('message','Invalid Email');
        }
    }
}
