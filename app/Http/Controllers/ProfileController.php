<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfileModel;

class ProfileController extends Controller
{
    public function template1(){
        return view('portfolio/template1');
    }
    public function portfolio(){
        return view('portfolio/index');
    }
    
    
    public function get_biodata(){
        return view('bio-data');
    }
    public function save_profile(Request $request){// we use a parameter to separate it from being a get method
        ProfileModel::create([
            'name'=>$request->input('name'),
            'nationality'=>$request->input('country'),
            'date_of_birth'=>$request->input('birth_date'),
            'school'=>$request->input('scl'),
            'college'=>$request->input('clg'),
            'university'=>$request->input('university'),
            'address'=>$request->input('Address'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('Mobile_num'),
            'hobby'=>$request->input('Hobby'),
            'about_me'=>$request->input('about_me'),
            'fathers_name'=>$request->input('fathers_name'),
            'mothers_name'=>$request->input('mothers_name')
        ]);
        //return $request->all(); to see all the data in the request variable
        return back()->with("message","Saved Successfully");// shows in session
    }
    public function template(){
        return view('template');
    }
    public function update_profile(Request $request){
        $profile_id = $request->input('profile_id');
        $bio_data=ProfileModel::find($profile_id);
        // find function does the work of query and profilemodel is the db name
        $bio_data->name =$request->input('name');
            $bio_data->nationality=$request->input('country');
            $bio_data->date_of_birth=$request->input('birth_date');
            $bio_data->school=$request->input('scl');
            $bio_data->college=$request->input('clg');
            $bio_data->university=$request->input('university');
            $bio_data->address=$request->input('Address');
            $bio_data->email=$request->input('email');
            $bio_data->phone=$request->input('Mobile_num');
            $bio_data->hobby=$request->input('Hobby');
            $bio_data->about_me=$request->input('about_me');
            $bio_data->fathers_name=$request->input('fathers_name');
            $bio_data->mothers_name=$request->input('mothers_name');
            $bio_data->save();
return back();
    }
    public function delete_profile(Request $request){
        $profile_id=$request->input('profile_id');
       // ProfileModel::destroy($profile_id);
       // return back(); //return redirect('route ta dite hobe')
        //ProfileModel::where('id','$profile_id')->delete();
        //ProfileModel::where('id','$profile_id')->where('name','Your desired name')->delete();
        //ProfileModel::where('name','Sanzida')->delete();
        ProfileModel::where('id',$profile_id)->update(['status'=>3]);// when shown to user that deleted but not deleted
        return back();
    }
    public function viewbiodata(){
        $all_bio_data = ProfileModel::all();// here all the data from db get's loaded that is we can see the schema in a website view
        // return $all_bio_data;
        return view('viewbiodata', compact('all_bio_data'));
    }
    public function view_bio_edit($id){
        $bio_data=ProfileModel::find($id);
        return view('edit-bio-data',compact('bio_data'));
        //return $bio_data;
               
    }

    
}

