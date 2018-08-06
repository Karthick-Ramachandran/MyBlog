<?php

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

Route::get('/', [
'uses' => 'FrontendController@index',
'as' => 'front'
]);
Route::get('/post/{slug}', [
    'uses' => 'FrontendController@page',
    'as' => 'page.show'
]);


Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/home', [
       'uses' => 'HomeController@index',
       'as' => 'home']);

    Route::get('/posts/create', [
        'uses' => 'PostController@create',
     'as' => 'create.post'
     ]);
     Route::post('/posts/store', [
         'uses' => 'PostController@store',
      'as' => 'post.store'
      ]);
      Route::get('/category/create', [
        'uses' => 'CategoriesController@create',
     'as' => 'create.category'
     ]);
     Route::post('/category/store', [
        'uses' => 'CategoriesController@store',
     'as' => 'category.store'
     ]);
     Route::get('/categories', [
        'uses' => 'CategoriesController@index',
        'as' => 'allc'
     ]);
     Route::get('/category/edit/{id}', [
        'uses' => 'CategoriesController@edit',
        'as' => 'category.edit'
     ]);
     Route::get('/category/delete/{id}', [
        'uses' => 'CategoriesController@destroy',
        'as' => 'category.delete'
     ]);
     Route::post('/category/update/{id}', [
        'uses' => 'CategoriesController@update',
        'as' => 'category.update'
     ]);
     Route::get('/posts', [
        'uses' => 'PostController@index',
        'as' => 'allp'
     ]);
     Route::get('/edit/posts/{id}', [
        'uses' => 'PostController@edit',
        'as' => 'post.edit'
     ]);
     Route::get('/posts/delete/{id}', [
        'uses' => 'PostController@destroy',
        'as' => 'post.delete'
     ]);
     Route::get('/posts/trashed', [
        'uses' => 'PostController@trashed',
        'as' => 'trashed'
     ]);
     Route::get('/posts/kill/{id}', [
        'uses' => 'PostController@kill',
        'as' => 'post.kill'
     ]);
     Route::get('/posts/restore/{id}', [
        'uses' => 'PostController@restore',
        'as' => 'post.restore'
     ]);
     Route::post('/posts/update/{id}', [
        'uses' => 'PostController@update',
        'as' => 'post.update'
     ]);
     Route::get('/tags', [
        'uses' => 'TagController@index',
        'as' => 'tags'
     ]);
     Route::get('/tags/create', [
        'uses' => 'TagController@create',
        'as' => 'tag.create'
     ]);
     Route::post('/tags/store', [
        'uses' => 'TagController@store',
        'as' => 'tag.store'
     ]);
     Route::get('/tags/edit/{id}', [
        'uses' => 'TagController@edit',
        'as' => 'tag.edit'
     ]);
     Route::post('/tags/update/{id}', [
        'uses' => 'TagController@update',
        'as' => 'tag.update'
     ]);
     Route::get('/tags/delete/{id}', [
        'uses' => 'TagController@destroy',
        'as' => 'tag.delete'
     ]);

     Route::get('/users', [
'uses' => 'UsersController@index',
'as' => 'index'
     ]);
     Route::get('/users/create', [
'uses' => 'UsersController@create',
'as' => 'user.create'
 ])->middleware('admin');
  Route::post('/users/create', [
 'uses' => 'UsersController@store',
 'as' => 'user.store'
])->middleware('admin');

Route::get('/settings', [
    'uses' => 'SettingController@index',
    'as' => 'setting'
]);
Route::post('/settings', [
    'uses' => 'SettingController@update',
    'as' => 'setting.store'
]);


});


