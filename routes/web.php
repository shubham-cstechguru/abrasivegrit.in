<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index'); 

Route::get('category/{category:slug_category}', 'CategoryController@index');
Route::get('product/{slug:slug}', 'SingleProductController@index');
Route::get('blog/{slug:slug}', 'SingleBlogController@index');
Route::get('/about', 'AboutusController@index'); 
Route::get('/blog', 'BlogController@index'); 
Route::get('/product', 'ProductController@index'); 
Route::get('/contact', 'ContactController@index'); 
Route::get('sitemap.xml/', 'SitemapController@index');
Route::get('sitemap.xml/product', 'SitemapController@articles');
Route::get('sitemap.xml/category', 'SitemapController@categories');
Route::get('sitemap.xml/blog', 'SitemapController@blogs');
Route::get('sitemap.xml/page', 'SitemapController@pages');
Route::post('ajax_request', 'AjaxController@index')->name('ajax-route');

    
Route::get('pagenotfound', ['as' => 'notfound', 'uses' => 'HomeController@pagenotfound']);