<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;

Route::get('/', [NewsController::class, 'index'])->name('landing');
//dell
Route::get('/products/dell/', [ProductController::class, 'dell_server'])->name('dell.server');
//end dell
//lenovo//
Route::get('/products/lenovo/', [ProductController::class, 'lenovo'])->name('lenovo');
//end lenovo
//apc//
Route::get('/products/apc/', [ProductController::class, 'apc'])->name('apc');
//end apc   
//vmware//
Route::get('/products/vmware/', [ProductController::class, 'vmware'])->name('vmware');
//end vmware
//sophos//
Route::get('/products/sophos/', [ProductController::class, 'sophos'])->name('sophos');
//end sophos
//fortinet//
Route::get('/products/fortinet/', [ProductController::class, 'fortinet'])->name('fortinet');
//end fortinet
//dlink//
Route::get('/products/dlink/', [ProductController::class, 'dlink'])->name('dlink');
//end dlink
//edgecore//
Route::get('/products/edgecore/', [ProductController::class, 'edgecore'])->name('edgecore');
//end edgecore
//aten//
Route::get('/products/aten/', [ProductController::class, 'aten'])->name('aten');
//end aten
//synology//
Route::get('/products/synology/', [ProductController::class, 'synology'])->name('synology');
//end synology
//qnap//
Route::get('/products/qnap/', [ProductController::class, 'qnap'])->name('qnap');
//end qnap
//citrix//
Route::get('/products/citrix/', [ProductController::class, 'citrix'])->name('citrix');
//end citrix
//vertiv//
Route::get('/products/vertiv/', [ProductController::class, 'vertiv'])->name('vertiv');
//end vertiv
//mcafee//
Route::get('/products/mcafee/', [ProductController::class, 'mcafee'])->name('mcafee');
//end mcafee
//alcatel//
Route::get('/products/alcatel/', [ProductController::class, 'alcatel'])->name('alcatel');
//end alcatel
//cisco//
Route::get('/products/cisco/', [ProductController::class, 'cisco'])->name('cisco');
//end cisco
//mikrotik//
Route::get('/products/mikrotik/', [ProductController::class, 'mikrotik'])->name('mikrotik');
//end mikrotik//
//allied telesis//
Route::get('/products/alliedtelesis/', [ProductController::class, 'alliedtelesis'])->name('allied.telesis');
//end allied telesis//
//ubiquiti//
Route::get('/products/ubiquiti/', [ProductController::class, 'ubiquiti'])->name('ubiquiti');
//end ubiquiti//