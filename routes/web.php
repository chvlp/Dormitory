<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/admin',               'admin\IndexController',['except' =>['show','create','store','destroy','create','update','edit']]);

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:seen-item')->group(function(){
        Route::resource('/user',          'User\UserController',['except' =>['show','create','store']]);
    });
Route::get('/user/search',                          'Admin\User\UserController@index');


Route::get('/admin/school',                         'Admin\School\SchoolController@index')->name('school.index');
Route::get('/admin/create/school',                   'Admin\School\SchoolController@create')->name('school.create');
Route::post('/admin/school/store',                  'Admin\School\SchoolController@store')->name('school.store');
Route::get('edit/edit/school/{id}',                  'Admin\School\SchoolController@edit');
Route::post('update/school/{id}',                   'Admin\School\SchoolController@update');
Route::get('delete/school/{id}',                    'Admin\School\SchoolController@delete');
Route::get('/school/search',                        'Admin\School\SchoolController@index');


Route::get('/admin/dormitory',                      'Admin\Dormitory\DormitoryController@index')->name('dormitory.index');
Route::get('/admin/create/dormitory',               'Admin\Dormitory\DormitoryController@create')->name('dormitory.create');
Route::post('/admin/dormitory/store',               'Admin\Dormitory\DormitoryController@store')->name('dormitory.store');
Route::get('edit/edit/dormitory/{id}',               'Admin\Dormitory\DormitoryController@Edit');
Route::get('show/show/dormitory/{id}',               'Admin\Dormitory\DormitoryController@show');
Route::post('update/dormitory/{id}',                'Admin\Dormitory\DormitoryController@Update');
Route::get('delete/dormitory/{id}',                 'Admin\Dormitory\DormitoryController@Delete');
Route::get('/dormitory/search',                     'Admin\Dormitory\DormitoryController@index');

Route::get('/admin/image',                      'Admin\Image\ImagesConroller@index')->name('image.index');
Route::get('/admin/create/image',                'Admin\Image\ImagesConroller@create')->name('create.image');
Route::post('/admin/image/store',               'Admin\Image\ImagesConroller@store')->name('image.store');
Route::get('edit/edit/image/{id}',               'Admin\Image\ImagesConroller@Edit');
Route::post('update/image/{id}',                'Admin\Image\ImagesConroller@Update');
Route::get('/delete/image/{id}',                'Admin\Image\ImagesConroller@Delete');
Route::get('/image/search',                      'Admin\Image\ImagesConroller@index');

Route::get('/admin/comment',                    'Admin\Comment\CommentController@index')->name('comment.index');
Route::get('/delete/comment/{id}',              'Admin\Comment\CommentController@delete');
Route::get('/comment/search',                   'Admin\Comment\CommentController@index');

// Dormit

Route::get('/dormit',                           'Dormit\IndexController@index')->name('dormit.index');
Route::get('/dormit/dormitory',                 'Dormit\dormitory\DormitoryController@index')->name('dormit.dormitory.index');
Route::get('/dormit/create/dormit',             'Dormit\dormitory\DormitoryController@create')->name('dormit.dormitory.create');
Route::post('/dormit/dormit/store',             'Dormit\dormitory\DormitoryController@store')->name('dormit.dormitory.store');
Route::get('edit/edit/dormit/{id}',             'Dormit\dormitory\DormitoryController@Edit');
Route::get('show/dormit/dormitory/{id}',        'Dormit\Dormitory\DormitoryController@show');
Route::post('update/dormit/{id}',               'Dormit\dormitory\DormitoryController@Update');
Route::get('delete/dormit/{id}',                'Dormit\dormitory\DormitoryController@Delete');
Route::get('/dormit/search',                    'Dormit\dormitory\DormitoryController@index');

Route::post('/dormit/{dormitory}/comments',     'Dormit\Comment\CommentController@store');


Route::get('/dormit/images',                      'Dormit\Image\ImageController@index')->name('images.index');
Route::get('/dormit/create/images',                'Dormit\Image\ImageController@create')->name('create.images');
Route::post('/dormit/images/store',               'Dormit\Image\ImageController@store')->name('images.store');
Route::get('edit/edit/images/{id}',               'Dormit\Image\ImageController@Edit');
Route::post('update/images/{id}',                'Dormit\Image\ImageController@Update');
Route::get('/delete/images/{id}',                'Dormit\Image\ImageController@Delete');
Route::get('/images/search',                      'Dormit\Image\ImageController@index');

Route::get('/user',     'User\IndexController@index')->name('user.index');



Route::resource('/user/dongdok',                          'User\Dongdok\DongdokController');
Route::post('/dongdok/{dormitory}/comments',              'User\Dongdok\CommentController@store');


Route::resource('/user/visavakum',                        'User\Visavakum\VisavakumController');
Route::post('/visavakum/{dormitory}/comments',            'User\Visavakum\CommentController@store');

Route::resource('/user/soutsaka',                          'User\Soutsaka\SoutsakaController');
Route::post('/soutsaka/{dormitory}/comments',              'User\Soutsaka\CommentController@store');


Route::get('/user/registor',                        'User\Regist\RegistController@index')->name('user.regist.index');
Route::post('/user/registor/store',                 'User\Regist\RegistController@store')->name('user.regist.store');

Route::get('/dormit/registor',                        'Dormit\Regist\RegistController@index')->name('Dormit.regist.index');
Route::post('/dormit/registor/store',                 'Dormit\Regist\RegistController@store')->name('Dormit.regist.store');


Route::get('/admin/registor',                   'Admin\Regist\RegistController@index')->name('admin.regist.index');
Route::get('/admin/delete/registor/{id}',       'Admin\Regist\RegistController@Delete');

// Route::get('/admin/registor', 'Admin\Regist\RegistController@index')->name('admin.regist.index');