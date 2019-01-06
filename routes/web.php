<?php

use App\Facebook;

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

/* app()->singleton('App\Example', function(){

    return new Example;
});
 */
/* 
 app()->singleton('App\Facebook', function(){

    return new App\Facebook('This is my Faebook Api Key');
 });
 */
Route::get('/home', function(Facebook $facebook){

    dd($facebook);

    // dd(app('App\Example'));

    return view('welcome');
});

Route::get('/', 'PagesController@home');

Route::get('/contact', 'PagesController@contact');

Route::get('/about', 'PagesController@about');

Route::get('/tasks', 'PagesController@tasks');


Route::resource('projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

Route::post('/completed_tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed_tasks/{task}', 'CompletedTasksController@destroy');

/* To check all the routes: php artisan route:list 
    Create a ressource route: php artisan make:ressource <res name>
*/