<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController\LoginController;
use App\Http\Controllers\AuthController\LogoutController;
use App\Http\Controllers\GodricController\CrewController;
use App\Http\Controllers\GodricController\BladeController;
use App\Http\Controllers\AuthController\RegisterController;
use App\Http\Controllers\GodricController\SupplyController;
use App\Http\Controllers\GodricController\UniformController;
use App\Http\Controllers\GodricController\ajaxcrudController;
use App\Http\Controllers\GodricController\DepartmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

//           url   blade
Route::view('home','home');



Route::group(['namespace' => 'GodricController'], function() {

############################## Blade Controller ##################################
    Route::get('Main',[BladeController::class,'MainPage'])->name('Main');


############################## Department Controller ##################################
    Route::get('department',[DepartmentController::class,'departments'])->name('department');
    Route::get('department2',[DepartmentController::class,'departments2']);
    Route::get('classes',[DepartmentController::class,'classes']);
    Route::get('backyards',[DepartmentController::class,'backyards']);
    Route::get('inside school',[DepartmentController::class,'inside']);
    Route::get('outside school',[DepartmentController::class,'outside']);
    Route::get('relative with school',[DepartmentController::class,'relative']);
    Route::post('department store',[DepartmentController::class,'store'])->name('departmentStore');






    ######################## Middleware #########################
    Route::group(['middleware'=>'auth'],function(){

        Route::get('department create',[DepartmentController::class,'departmentCreate']);
        Route::get('dashboard class',[DepartmentController::class,'dashboardClass']);
        Route::get('dashboard backyard',[DepartmentController::class,'dashboardBackyard']);
        Route::get('dashboard inside school',[DepartmentController::class,'dashboardInside']);
        Route::get('dashboard outside school',[DepartmentController::class,'dashboardOutside']);
        Route::get('dashboard relative with school',[DepartmentController::class,'dashboardRelative']);
        Route::get('department edit/{show_id}',[DepartmentController::class,'edit'])->name('edit');
        Route::post('update/{show_id}',[DepartmentController::class,'update']);
        Route::get('delete/{show_id}',[DepartmentController::class,'delete']);

        Route::get('supply create',[SupplyController::class,'create']);
        Route::get('dashboard classes',[SupplyController::class,'dashboardClasses']);
        Route::get('dashboard quidditch',[SupplyController::class,'dashboardQuidditch']);
        Route::get('supply edit/{supply_id}',[SupplyController::class,'edit']);
        Route::post('supply update/{supply_id}',[SupplyController::class,'update']);
        Route::get('supply delete/{supply_id}',[SupplyController::class,'delete']);

        Route::get('uniform create',[UniformController::class,'create']);
        Route::get('dashboard gryffindor',[UniformController::class,'dashboardGryffindor']);
        Route::get('dashboard slytherin',[UniformController::class,'dashboardSlytherin']);
        Route::get('dashboard hufflepuff',[UniformController::class,'dashboardHufflepuff']);
        Route::get('dashboard ravenclaw',[UniformController::class,'dashboardRavenclaw']);
        Route::get('uniform edit/{uniform_id}',[UniformController::class,'edit']);
        Route::post('uniform update/{uniform_id}',[UniformController::class,'update']);
        Route::get('uniform delete/{uniform_id}',[UniformController::class,'delete']);
        Route::get('delete image/{uniform_id}',[UniformController::class,'deleteImage']);

        Route::get('crew create',[CrewController::class,'crewCreate']);
        Route::get('dashboard headmaster',[CrewController::class,'dashboardHeadmaster']);
        Route::get('dashboard professor',[CrewController::class,'dashboardProfessor']);
        Route::get('dashboard student',[CrewController::class,'dashboardStudent']);
        Route::get('dashboard others',[CrewController::class,'dashboardOthers']);
        Route::get('crew edit/{crew_id}',[CrewController::class,'edit']);
        Route::post('crew update/{crew_id}',[CrewController::class,'update']);
        Route::get('crew delete/{crew_id}',[CrewController::class,'delete']);
    });



############################### Supply Controller ##################################
    Route::get('for classes',[SupplyController::class,'classes']);
    Route::get('for quidditch',[SupplyController::class,'quidditch']);
    Route::post('supply store',[SupplyController::class,'store'])->name('supplyStore');



############################### Uniform Controller ##################################
    Route::post('uniform store',[UniformController::class,'store'])->name('uniformStore');
    Route::get('uniform',[UniformController::class,'uniform']);


################################# Crew Controller ####################################
    Route::post('crew store',[CrewController::class,'store'])->name('crewStore');
    Route::get('headmaster',[CrewController::class,'headmaster']);
    Route::get('professors',[CrewController::class,'professors']);
    Route::get('students',[CrewController::class,'students']);
    Route::get('others',[CrewController::class,'others']);

});


Route::group(['namespace' => 'AuthController'], function() {

############################## Auth Controller ######################################

    // Login Controller
    Route::get('admin login',[LoginController::class,'bladelogin'])->name('login');
    Route::post('log',[LoginController::class,'admin_login'])->name('log');

     // Register Controller
    //Route::get('admin register',[RegisterController::class,'register']);
    //Route::post('admin store',[RegisterController::class,'store'])->name('admin_register'); // Register a new Admin

    Route::group(['middleware'=>'auth'],function(){

        Route::get('dashboard',[LoginController::class,'bladeDashboard']);
        Route::get('admin logout',[LogoutController::class,'logout'])->name('logout');
    });

});
