<?php

namespace App\Http\Controllers\GodricController;


use File;
use view;
use Session;
use App\Models\User;
use App\Models\supply;
use App\Models\inforead;
use App\Traits\photoTrait;
use Illuminate\Http\Request;
use App\Http\Requests\infoRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\GodricController\SupplyController;



class SupplyController extends Controller
{

    use photoTrait;

    public function __construct()
    {

    }


    //Admin Dashboard Blade
    public function create(){
        $user = Auth::user()->name;
        return view('myApp.adminDashboard.supply.create',compact('user'));
    }

##################################### CRUD ######################################
    public function store(infoRequest $request){
        //validator

        //Call Photo from Traits folder
        $file_name = $this->savephoto($request->photo,'img/supplies');

        // Save photo in folder

        //insert
        supply::create([
            'name' => $request->name,
            'description' => $request->description,
            'type'=>$request->type,
            'photo' => $file_name,
        ]);
        return redirect() ->back() ->with(['success' => 'Insert Done Seccessfully :)']);

    }

    public function edit($supply_id){
        $user = Auth::user()->name;
        //check if the id exist or not
        $supply = supply::find($supply_id);
        if(!$supply)
        return redirect() ->back();

        //select from DB
        $supply = supply::select('id','name','description','type','photo') ->find($supply_id);
        return view('myApp.adminDashboard.supply.edit',compact('supply','user'));

    }

    public function update(infoRequest $request, $supply_id){

        //validation

        //check if the id exist or not
        $supply = supply::find($supply_id);
        if(!$supply)
        return redirect() ->back();

        //update
        if($request->has('photo')){
            $path = public_path('/img/supplies/'.$supply->photo);
            if(File::exists($path)){
                File::delete($path);
            }
           $img = $request->file('photo');
           $img_ext = $img->extension();
           $img_name = time().rand(1,4000).'.'.$img_ext;
           $path = 'img/supplies';
           $img ->move($path,$img_name);
        }
        else {
            $img_name = $supply->photo;
        }
        $supply->name = $request->name;
        $supply->description = $request->description;
        $supply->type = $request->type;
        $supply->photo = $img_name;
        $supply->update();

        return redirect() ->back() ->with(['success' => 'Update Done']);
    }


    public function delete($supply_id){

        $supply = supply::find($supply_id);

        if(!$supply)
        return redirect() ->back() ->with(['error' => 'This id doesnot exist']);

        $path = public_path('img/supplies/'.$supply->photo);
        if(File::exists($path)){
          File::delete($path);
      }
        $supply->delete();
        //return redirect() ->route('showinfo',$show_id) ->with(['success'=>'Delete Done >>>>>>']);
        return redirect() ->back() ->with(['success' => 'Delete Done']);
    }
##################################### End CRUD ######################################





##################################### Dashboard Crew ######################################
    public function dashboardClasses(){
        $user = Auth::user()->name;
        $classinfo = supply::select('id','name','description','photo')->where('type','class') ->get();
        return view('myApp.adminDashboard.supply.classes',compact('classinfo','user'));
    }

    public function dashboardQuidditch(){
        $user = Auth::user()->name;
        $quidditchinfo = supply::select('id','name','description','photo')->where('type','quidditch') ->get();
        return view('myApp.adminDashboard.supply.quidditch',compact('quidditchinfo','user'));
    }

##################################### End Dashboard Crew ######################################








##################################### Crew ######################################
    public function classes(){
        $classinfo = supply::select('id','name','description','photo')->where('type','class') ->get();
        return view('myApp.supplies.classes',compact('classinfo'));
    }

    public function quidditch(){
        $quidditchinfo = supply::select('id','name','description','photo')->where('type','quidditch') ->get();
        return view('myApp.supplies.quidditch',compact('quidditchinfo'));
    }
##################################### End Departments ######################################

}

