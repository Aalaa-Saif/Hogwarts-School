<?php

namespace App\Http\Controllers\GodricController;


use File;
use view;
use Session;
use App\Models\crew;
use App\Models\User;
use App\Traits\photoTrait;
use Illuminate\Http\Request;
use App\Http\Requests\infoRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\GodricController\CrewController;



class CrewController extends Controller
{

    use photoTrait;

    public function __construct()
    {

    }

    //Admin Dashboard Blade
    public function crewCreate(){
        $user = Auth::user()->name;
        return view('myApp.adminDashboard.crew.create',compact('user'));
    }

##################################### CRUD ######################################
    public function store(infoRequest $request){
        //validator

        //Call Photo from Traits folder
        $file_name = $this->savephoto($request->photo,'img/crew');
        // Save photo in folder

        //insert
        crew::create([
            'name' => $request->name,
            'description' => $request->description,
            'type'=>$request->type,
            'photo' => $file_name,
        ]);
        return redirect() ->back() ->with(['success' => 'Insert Done Seccessfully :)']);
    }

    public function edit($crew_id){
        $user = Auth::user()->name;
        //check if the id exist or not
        $crew = crew::find($crew_id);
        if(!$crew)
        return redirect() ->back();

        //select from DB
        $crew = crew::all()->find($crew_id);
        return view('myApp.adminDashboard.crew.edit',compact('crew','user'));

    }

    public function update(Request $request, $crew_id){
        //validation

        //check if the id exist or not
       $crew = crew::find($crew_id);
       if(!$crew)
        return redirect() ->back();

        //update
        if($request->has('photo')){
            $path = public_path('/img/crew/'.$crew->photo);
            if(File::exists($path)){
                File::delete($path);
            }
           $img = $request->file('photo');
           $img_ext = $img->extension();
           $img_name = time().rand(1,4000).'.'.$img_ext;
           $path = 'img/crew';
           $img ->move($path,$img_name);
        }
        else {
            $img_name = $crew->photo;
        }
        $crew->name = $request->name;
        $crew->description = $request->description;
        $crew->type = $request->type;
        $crew->photo = $img_name;
        $crew->update();

        return redirect() ->back() ->with(['success' => 'Update Done']);
    }


    public function delete($crew_id){

        $crew = crew::find($crew_id);

        if(!$crew)
        return redirect() ->back() ->with(['error' => 'This id doesnot exist']);

        $path = public_path('img/crew/'.$crew->photo);
        if(File::exists($path)){
          File::delete($path);
      }
        $crew->delete();
        //return redirect() ->route('showinfo',$show_id) ->with(['success'=>'Delete Done >>>>>>']);
        return redirect() ->back() ->with(['success' => 'Delete Done']);
    }
##################################### End CRUD ######################################





##################################### Dashboard Crew ######################################
    public function dashboardHeadmaster(){
       $user = Auth::user()->name;
       $headmasterinfo = crew::select('id','name','description','photo')->where('type','headmaster') ->get();
       return view('myApp.adminDashboard.crew.headmaster',compact('headmasterinfo','user'));
    }

    public function dashboardProfessor(){
        $user = Auth::user()->name;
        $professorinfo = crew::select('id','name','description','photo')->where('type','professor') ->get();
        return view('myApp.adminDashboard.crew.professors',compact('professorinfo','user'));
     }

     public function dashboardStudent(){
        $user = Auth::user()->name;
        $studentinfo = crew::select('id','name','description','photo')->where('type','student') ->get();
        return view('myApp.adminDashboard.crew.students',compact('studentinfo','user'));
     }

     public function dashboardOthers(){
        $user = Auth::user()->name;
        $otherinfo = crew::select('id','name','description','photo')->where('type','others') ->get();
        return view('myApp.adminDashboard.crew.others',compact('otherinfo','user'));
     }

##################################### End Dashboard Crew ######################################








##################################### Crew ######################################
    public function headmaster(){
        $headmasterinfo = crew::select('id','name','description','photo')->where('type','headmaster')->orderBy('id','ASC')->get();
        return view('myApp.crew.headmaster',compact('headmasterinfo'));
    }

    public function professors(){
        $professorinfo = crew::select('id','name','description','photo')->where('type','Professor')->orderBy('id','ASC')->get();
        return view('myApp.crew.professors',compact('professorinfo'));
    }

    public function students(){
        $studentinfo = crew::select('id','name','description','photo')->where('type','student')->orderBy('id','ASC')->get();
        return view('myApp.crew.students',compact('studentinfo'));
    }

    public function others(){
        $otherinfo = crew::select('id','name','description','photo')->where('type','others')->orderBy('id','ASC')->get();
        return view('myApp.crew.others',compact('otherinfo'));
    }

##################################### End Departments ######################################
}

