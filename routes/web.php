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

Route::get('/', function () {
    return view('pages.login');
})->name('home');

Route::get('/dashboard',function(){
    return view('pages.dashboard.index');
})->name('index');
Route::get('/dashboard/index',function(){
    return view('pages.dashboard.index');
})->name('index');

Route::get('/dashboard/index1',function(){
    return view('pages.dashboard.index1');
})->name('index1');

Route::get('/dashboard/index2',function(){
    return view('pages.dashboard.index2');
})->name('index2');

Route::get('/charts/chartjs',function(){
    return view('pages.charts.chartjs');
})->name('chartjs');

Route::get('/charts/chartjs1',function(){
    return view('pages.charts.chartjs1');
})->name('chartjs1');

Route::get('/charts/echart',function(){
    return view('pages.charts.echart');
})->name('echart');

Route::get('/charts/morisjs',function(){
    return view('pages.charts.morisjs');
})->name('morisjs');

Route::get('/charts/othercharts',function(){
    return view('pages.charts.othercharts');
})->name('otherchart');

Route::get('/extra/page404',function(){
    return view('pages.extra.page404');
})->name('page404');

Route::get('/extra/plain',function(){
    return view('pages.extra.plain');
})->name('plain');

Route::get('/extra/pricingtable',function(){
    return view('pages.extra.pricingtable');
})->name('pricing');

Route::get('/extra/page403',function(){
    return view('pages.extra.page403');
})->name('page403');

Route::get('/extra/page500',function(){
    return view('pages.extra.page500');
})->name('page500');

Route::get('/forms/form',function(){
    return view('pages.forms.form');
})->name('form');

Route::get('/forms/form-advanced',function(){
    return view('pages.forms.form-advanced');
})->name('form-advanced');

Route::get('/forms/form-buttons',function(){
    return view('pages.forms.form-buttons');
})->name('form-buttons');

Route::get('/forms/form-upload',function(){
    return view('pages.forms.form-upload');
})->name('form-upload');

Route::get('/forms/form-validation',function(){
    return view('pages.forms.form-validation');
})->name('form-validation');

Route::get('/forms/form-wizards',function(){
    return view('pages.forms.form-wizards');
})->name('form-wizards');


Route::get('/layouts/fixedfooter',function(){
    return view('pages.layouts.fixedfooter');
})->name('fixedfooter');

Route::get('/layouts/fixedsidebar',function(){
    return view('pages.layouts.fixedsidebar');
})->name('fixedsidebar');


Route::get('/tables/table',function(){
    return view('pages.tables.table');
})->name('table');

Route::get('/tables/table-dynamic',function(){
    return view('pages.tables.table-dynamic');
})->name('table-dynamic');


Route::get('/ui/calendar',function(){
    return view('pages.ui.calendar');
})->name('calendar');

Route::get('/ui/general',function(){
    return view('pages.ui.general');
})->name('general');

Route::get('/ui/glyphicons',function(){
    return view('pages.ui.glyphicons');
})->name('glyphicons');

Route::get('/ui/icons',function(){
    return view('pages.ui.icons');
})->name('icons');

Route::get('/ui/inbox',function(){
    return view('pages.ui.inbox');
})->name('inbox');

Route::get('/ui/invoice',function(){
    return view('pages.ui.invoice');
})->name('invoice');

Route::get('/ui/media',function(){
    return view('pages.ui.media');
})->name('media');

Route::get('/ui/typography',function(){
    return view('pages.ui.typography');
})->name('typography');

Route::get('/ui/widgets',function(){
    return view('pages.ui.widgets');
})->name('widgets');

Route::get('/additionalpages/contacts',function(){
    return view('pages.additionalpages.contacts');
})->name('contacts');

Route::get('/additionalpages/ecommerce',function(){
    return view('pages.additionalpages.ecommerce');
})->name('ecommerce');

Route::get('/additionalpages/profile',function(){
    return view('pages.additionalpages.profile');
})->name('profile');

Route::get('/additionalpages/projects',function(){
    return view('pages.additionalpages.projects');
})->name('project');

Route::get('/additionalpages/projectsdetails',function(){
    return view('pages.additionalpages.projectsdetails');
})->name('projectdetails');

Route::get('/level/level2',function(){
    return view('pages.level.level2');
})->name('level');