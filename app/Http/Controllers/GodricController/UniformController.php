<?php

namespace App\Http\Controllers\GodricController;


use File;
use view;
use Session;
use App\Models\User;
use App\Models\uniform;
use App\Models\inforead;
use App\Models\uniformimg;
use Illuminate\Http\Request;
use App\Http\Requests\infoImgMulti;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\GodricController\UniformController;



class UniformController extends Controller
{



    public function __construct()
    {

    }


    //Admin Dashboard Blade
    public function create(){
        $user = Auth::user()->name;
        return view('myApp.adminDashboard.uniform.create',compact('user'));
    }

    public function try(){

        return view('myApp.uniforms.try');
    }

##################################### CRUD ######################################
    public function store(infoImgMulti $request){
        //validator

        //insert
        $new_uniform = uniform::create([
            'description' => $request->description,
            'type'=>$request->type,
        ]);

        if($request->has('photo')){
            foreach($request->file('photo') as $img){
                $img_ext = $img->extension();
                $img_name = time().rand(1,4000).'.'.$img_ext;
                $path = 'img/uniforms';
                $img ->move($path,$img_name);

                uniformimg::create([
                    'uniform_id' => $new_uniform->id,
                    'photo' => $img_name
                ]);
            }

        }


        return redirect() ->back() ->with(['success' => 'Insert Done Seccessfully :)']);
    }

    public function edit($uniform_id){
        $user = Auth::user()->name;
        //check if the id exist or not
        $uniform = uniform::find($uniform_id);
        if(!$uniform)
        return redirect() ->back();

        //select from DB
        $uniform = uniform::all()->find($uniform_id);
        return view('myApp.adminDashboard.uniform.edit',compact('uniform','user'));

    }

    public function update(infoImgMulti $request, $uniform_id){

        //validation

        //check if the id exist or not
        $uniform = uniform::find($uniform_id);
        $input = $request->all();

        if(!$uniform)
        return redirect() ->back();

        //update
        if($request->has('photo')){
            foreach($request->file('photo') as $img){
                $img_ext = $img->extension();
                $img_name = time().rand(1,4000).'.'.$img_ext;
                $path = 'img/uniforms';
                $img ->move($path,$img_name);

                uniformimg::create([
                    'uniform_id' => $uniform->id,
                    'photo' => $img_name
                ]);
            }
        }
        $uniform->update($input);
          return redirect() ->back() ->with(['success' => 'Update Done']);
    }


    public function delete($uniform_id){

        $uniform = uniform::find($uniform_id);

        if(!$uniform)
        return redirect() ->back() ->with(['error' => 'This id doesnot exist']);

        foreach($uniform->images as $img){
            $path = public_path('img/uniforms/'.$img->photo);
            if(File::exists($path)){
              File::delete($path);
          }
        }

        $uniform->delete();
        $uniform->images()->delete(); //images() Name of relationship in uniform Model
        //return redirect() ->route('showinfo',$show_id) ->with(['success'=>'Delete Done >>>>>>']);
        return redirect() ->back() ->with(['success' => 'Delete Done']);
    }

    public function deleteImage($uniform_id){

        $uniformimg = uniformimg::find($uniform_id);

        if(!$uniformimg)
        return redirect() ->back() ->with(['error' => 'This id doesnot exist']);

          $path = public_path('img/uniforms/'.$uniformimg->photo);
          if(File::exists($path)){
            File::delete($path);
        }
          $uniformimg->delete();
          return redirect() ->back() ->with(['success' => 'Delete Done']);


     }
##################################### End CRUD ######################################





##################################### Dashboard Crew ######################################
    public function dashboardGryffindor(){
        $user = Auth::user()->name;
        $gcinfo = uniform::all()->where('type','Gryffindor Class');
        $gqinfo = uniform::all()->where('type','Gryffindor Quidditch');

    return view('myApp.adminDashboard.uniform.gryffindor',compact('gcinfo','gqinfo','user'));
    }
    public function dashboardSlytherin(){
        $user = Auth::user()->name;
        $scinfo = uniform::all()->where('type','Slytherin Class');
        $sqinfo = uniform::all()->where('type','Slytherin Quidditch');

        return view('myApp.adminDashboard.uniform.slytherin',compact('scinfo','sqinfo','user'));
    }
    public function dashboardHufflepuff(){
        $user = Auth::user()->name;
        $hcinfo = uniform::all()->where('type','Hufflepuff Class');
        $hqinfo = uniform::all()->where('type','Hufflepuff Quidditch');

        return view('myApp.adminDashboard.uniform.hufflepuff',compact('hcinfo','hqinfo','user'));
    }
    public function dashboardRavenclaw(){
        $user = Auth::user()->name;
        $rcinfo = uniform::all()->where('type','Ravenclaw Class');
        $rqinfo = uniform::all()->where('type','Ravenclaw Quidditch');

        return view('myApp.adminDashboard.uniform.ravenclaw',compact('rcinfo','rqinfo','user'));
    }

##################################### End Dashboard Crew ######################################




##################################### Crew ######################################
    public function uniform(){
        $gcinfo = uniform::all()->where('type','Gryffindor Class');

        $gqinfo = uniform::all()->where('type','Gryffindor Quidditch');

        $scinfo = uniform::all()->where('type','Slytherin Class');

        $sqinfo = uniform::all()->where('type','Slytherin Quidditch');

        $hcinfo = uniform::all()->where('type','Hufflepuff Class');

        $hqinfo = uniform::all()->where('type','Hufflepuff Quidditch');

        $rcinfo = uniform::all()->where('type','Ravenclaw Class');

        $rqinfo = uniform::all()->where('type','Ravenclaw Quidditch');


        return view('myApp.uniforms.uniforms',compact('gcinfo','gqinfo','scinfo','sqinfo','hcinfo','hqinfo','rcinfo','rqinfo'));
    }

##################################### End Departments ######################################

}

