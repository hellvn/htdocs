<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;
use Illuminate\Http\Request;
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

//Route::get('/', function () {
//    return view('welcome');
//});

//show Task Dashboard
Route::get('/', function () {
    $tasks = Task::orderBy('created_at', 'desc')->get();

    return view('task',[
        'tasks'=> $tasks
    ]);
});
//add new task
Route::post('/task', function (Request $request) {
    //validate information
    $validator = Validator::make($request->all(),[
        'name'=> 'required|max:255'
    ]);
    if ($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    $task = new Task;
    $task->name = $request->name;
    $task->save();
    return redirect('/');
});
//delete task
Route::delete('/task/{task}', function ($id) {
    Task::findOrFail($id)->delete();
    return redirect('/');
});
