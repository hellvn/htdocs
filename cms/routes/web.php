<?php

use Illuminate\Support\Facades\Route;
use App\Models\post;
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
Route::get('/home', 'HomeController@showWelcome');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function(){
    return 'Hello world!';
});

Route::get('/insert', function (){
    \Illuminate\Support\Facades\DB::insert('insert into posts(title, body, is_admin) values(?, ?, ?)',
        ['PHP with Laravel', 'is the best framework!', 0]);
    return 'Data inserted!';
});

Route::get('/read', function (){
    $result = \Illuminate\Support\Facades\DB::select('select * from posts where id = ?', [1]);
    foreach ($result as $post){
        return $post->title.' '.$post->body.'<br>';
    }
});

Route::get('/update', function (){
   $updated = \Illuminate\Support\Facades\DB::update(
       'update posts set title = "New title" where id > ?', [2]);
   return $updated.' record updated!';
});

Route::get('/delete', function (){
    $deleted = \Illuminate\Support\Facades\DB::delete(
        'delete from posts where id = ?', [3]);
    return $deleted.' record deleted';
});

Route::get('/readall', function (){
   $posts = post::all();
   foreach ($posts as $p){
       echo $p->title.'<br>';
   }
});

Route::get('/findId', function (){
   $post = post::where('id','>=',1)
       ->where('title', 'PHP with Laravel')
       ->orderBy('id','desc')
       ->take(10)
       ->get();
    foreach ($post as $p) {
        echo $p->title.' '.$p->body;
        echo '<br>';
   }
});

Route::get('/insertORM', function (){
   $posts = new post;
   $posts->title = 'insert ORM';
   $posts->body = 'INSERTED done done ORM';
   $posts->is_admin = 1;
   $posts->save();
   return 'Data Inserted!';
});

Route::get('deleteORM', function (){
   post::where('id', '>=', 9)
       ->delete();
   return 'Deleted!';
});

Route::get('destroyORM', function (){
    post::destroy([7,5]);
    return 'Destroyed!';
});
