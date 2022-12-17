<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalInfo;
use App\Models\clientTable;
use App\Models\Skill;


class AdminController extends Controller
{
    //
    public function dashboard(){
        return view('admin/dashboard');//filename
    }
    public function dbform(){
        return view('admin/dbform');
    }
    public function skill(){
        return view('admin/skill');
    }
    public function save_profile(Request $request){// we use a parameter to separate it from being a get method
        PersonalInfo::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'image'=>$request->input('image'),
            'birthdate'=>$request->input('birthdate'),
            'designation'=>$request->input('designation'),
            'address'=>$request->input('address'),
            'about_me'=>$request->input('about_me'),
            'fb'=>$request->input('fb_link'),
            'ig'=>$request->input('insta_link'),
            'linkedin'=>$request->input('linkedin_link')
        ]);
        //return $request->all(); to see all the data in the request variable
        return back()->with("message","Saved Successfully");// shows in session
    }
    public function save_client(Request $request){// we use a parameter to separate it from being a get method
        clientTable::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'subject'=>$request->input('subject'),
            'message'=>$request->input('message')
        ]);
        //return $request->all(); to see all the data in the request variable
        return back()->with("message","Saved Successfully");// shows in session
    }
  
    public function save_skill(Request $request){// we use a parameter to separate it from being a get method
        Skill::create([
            'title'=>$request->input('title'),
            'proficiency_percent'=>$request->input('proficiency_percent'),
            'type'=>$request->input('type')
        ]);
        //return $request->all(); to see all the data in the request variable
        return back()->with("message","Saved Successfully");// shows in session
    }
}
