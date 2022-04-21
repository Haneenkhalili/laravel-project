<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\HTTP\Controllers\StudentsController;
use App\HTTP\Controllers\CoursesController;
use App\HTTP\Controllers\StudentCourseController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




/////////////////////////////////Courses Route////////////////////////////////////////////////////////////

Route::get('/courses', [App\Http\Controllers\CoursesController::class,'index'])->name('courses.index');
Route::get('/courses/add-course', [App\Http\Controllers\CoursesController::class,'create'])->name('courses.create');
Route::put('/courses/add-course', [App\Http\Controllers\CoursesController::class,'store'])->name('courses.store');
Route::get('/courses/{id}', [App\Http\Controllers\CoursesController::class, 'edit'])->name('courses.edit');
Route::put('courses/{id}', [App\Http\Controllers\CoursesController::class, 'update'])->name('courses.update');
Route::delete('courses/{id}',[App\Http\Controllers\CoursesController::class,'destroy'])->name('courses.destroy');







/////////////////////////////////Students Route////////////////////////////////////////////////////////////
Route::get('/students', [App\Http\Controllers\StudentsController::class,'index'])->name('students.index');
Route::get('/students/add-student', [App\Http\Controllers\StudentsController::class,'create'])->name('students.create');
Route::put('/students/add-student', [App\Http\Controllers\StudentsController::class,'store'])->name('students.store');
Route::get('students/{id}',[App\Http\Controllers\StudentsController::class,'edit'])->name('students.edit');
Route::put('students/{id}',[App\Http\Controllers\StudentsController::class,'update'])->name('students.update');
Route::delete('students/{id}',[App\Http\Controllers\StudentsController::class,'destroy'])->name('students.destroy');



/////////////////////////////////////////Project Route///////////////////////////////////////////////////
Route::get('/projects/{id}', [App\Http\Controllers\ProjectController::class,'index'])->name('projects.index');
Route::get('/projects/add-project/{student_id}/{course_id}',[App\Http\Controllers\ProjectController::class,'create'])->name('projects.create');
Route::put('/projects/add-project/{student_id}/{course_id}',[App\Http\Controllers\ProjectController::class,'store'])->name('projects.store');


///////////////////////////////////////Tasks Route/////////////////////////////////////////////////////

//Route::get('/tasks', [StudentController::class, 'index']);
//Route::post('/store-input-fields', [StudentController::class, 'store']);

//Route::get('/tasks/{id}', [App\Http\Controllers\TaskController::class,'index'])->name('tasks.index');
Route::get('/tasks/add-task/{id}',[App\Http\Controllers\TaskController::class,'create'])->name('tasks.create');
Route::put('/tasks/add-task/{project_id}',[App\Http\Controllers\TaskController::class,'store'])->name('tasks.store');

Route::get('tasks/show-task/{id}',[App\Http\Controllers\TaskController::class,'showDatatable'])->name('tasks.showDatatable');
Route::post('tasks/show-task',[App\Http\Controllers\TaskController::class,'updateOrder'])->name('tasks.updateOrder');

