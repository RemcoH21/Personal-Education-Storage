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
Route::get('/admin', [
  'uses' => 'AdminPanelController@loginIndex',
  'as' => 'admin.login.index'
]);
Route::post('/admin/login', [
  'uses' => 'AdminPanelController@loginGo',
  'as' => 'admin.login.go'
]);
Route::get('/admin/logout', [
  'uses' => 'AdminPanelController@logout',
  'as' => 'admin.login.logout'
]);
Route::get('/adminpanel', [
    'uses' => 'AdminPanelController@index',
    'as' => 'admin.index'
]);
Route::get('/adminpanel/editpage/{page_id}', [
  'uses' => 'AdminPanelController@editPageIndex',
  'as' => 'admin.editpage'
]);
Route::get('/adminpanel/editpage/edit/{textfield_id}', [
  'uses' => 'AdminPanelController@editTextFieldIndex',
  'as' => 'admin.edittextfield.index'
]);
Route::post('/adminpanel/editpage/edit/save', [
  'uses' => 'AdminPanelController@editTextFieldSave',
  'as' => 'admin.edittextfield.save'
]);
