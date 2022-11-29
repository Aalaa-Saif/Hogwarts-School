<?php

namespace App\Http\Controllers\GodricController;


use File;
use view;
use Session;
use App\Models\User;
use App\Models\department;
use App\Traits\photoTrait;
use Illuminate\Http\Request;
use App\Http\Requests\infoRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\GodricController\DepartmentController;



class DepartmentController extends Controller
{

    use photoTrait;

    public function __construct()
    {

    }

     //Admin Dashboard Blade
     public function departmentCreate(){
        $user = Auth::user();
        return view('myApp.adminDashboard.department.create',compact('user'));
    }

##################################### CRUD ######################################
    public function store(infoRequest $request){
        //validator

        //Call Photo from Traits folder
        $file_name = $this->savephoto($request->photo,'img/departments');

        // Save photo in folder

        //insert
        department::create([
            'name' => $request->name,
            'description' => $request->description,
            'type'=>$request->type,
            'photo' => $file_name,
        ]);
        return redirect() ->back() ->with(['success' => 'Insert Done Seccessfully :)']);
    }

    public function edit($show_id){
        $user = Auth::user();
        //check if the id exist or not
        $show = department::find($show_id);
        if(!$show)
        return redirect() ->back();

        //select from DB
        $show = department::select('id','name','description','type','photo') ->find($show_id);
        return view('myApp.adminDashboard.department.edit',compact('show','user'));

    }

    public function update(infoRequest $request, $show_id){

        //validation

        //check if the id exist or not
       $show = department::find($show_id);
       if(!$show)
        return redirect() ->back();

        //update
        if($request->has('photo')){
            $path = public_path('/img/departments/'.$show->photo);
            if(File::exists($path)){
                File::delete($path);
            }
           $img = $request->file('photo');
           $img_ext = $img->extension();
           $img_name = time().rand(1,4000).'.'.$img_ext;
           $path = 'img/departments';
           $img ->move($path,$img_name);
        }
        else {
            $img_name = $show->photo;
        }
        $show->name = $request->name;
        $show->description = $request->description;
        $show->type = $request->type;
        $show->photo = $img_name;
        $show->update();

        return redirect() ->back() ->with(['success' => 'Update Done']);
    }


    public function delete($show_id){

        $show = department::find($show_id);

        if(!$show)
        return redirect() ->back() ->with(['error' => 'This id doesnot exist']);

        $path = public_path('img/departments/'.$show->photo);
        if(File::exists($path)){
          File::delete($path);
      }
        $show->delete();
        //return redirect() ->route('showinfo',$show_id) ->with(['success'=>'Delete Done >>>>>>']);
        return redirect() ->back() ->with(['success' => 'Delete Done']);
    }
##################################### End CRUD ######################################





##################################### Dashboard Departments ######################################
    public function dashboardClass(){
        $user = Auth::user();
       $classinfo = department::select('id','name','description','photo')->where('type','class') ->get();
       return view('myApp.adminDashboard.department.classes',compact('classinfo','user'));
    }

    public function dashboardBackyard(){
        $user = Auth::user();
        $backyardinfo = department::select('id','name','description','photo')->where('type','backyard') ->get();
        return view('myApp.adminDashboard.department.backyards',compact('backyardinfo','user'));
     }

     public function dashboardInside(){
        $user = Auth::user();
        $insideinfo = department::select('id','name','description','photo')->where('type','inside school') ->get();
        return view('myApp.adminDashboard.department.inside',compact('insideinfo','user'));
     }

     public function dashboardOutside(){
        $user = Auth::user();
        $outsideinfo = department::select('id','name','description','photo')->where('type','outside school') ->get();
        return view('myApp.adminDashboard.department.outside',compact('outsideinfo','user'));
     }

     public function dashboardRelative(){
        $user = Auth::user();
        $relativeinfo = department::select('id','name','description','photo')->where('type','relative with school') ->get();
        return view('myApp.adminDashboard.department.relative',compact('relativeinfo','user'));
     }
##################################### End Dashboard Departments ######################################








##################################### Departments ######################################
    //Departments Blade
    public function departments(){
        return view('myApp.departments.departments');
    }

    public function departments2(){
        return view('myApp.departments.departments2');
    }


    public function classes(){
        $classinfo = department::select('id','name','description','photo')->where('type','class') ->get();
        return view('myApp.departments.classes',compact('classinfo'));
    }

    public function backyards(){
        $backyardinfo = department::select('id','name','description','photo')->where('type','backyard') ->get();
        return view('myApp.departments.backyards',compact('backyardinfo'));
    }

    public function inside(){
        $insideinfo = department::select('id','name','description','photo')->where('type','inside school') ->get();
        return view('myApp.departments.insideSchool',compact('insideinfo'));
    }

    public function outside(){
        $outsideinfo = department::select('id','name','description','photo')->where('type','outside school') ->get();
        return view('myApp.departments.outsideSchool',compact('outsideinfo'));
    }

    public function relative(){
        $relativeinfo = department::select('id','name','description','photo')->where('type','relative with school') ->get();
        return view('myApp.departments.relative',compact('relativeinfo'));
    }
##################################### End Departments ######################################
}

