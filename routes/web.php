<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController as LienheController;
use App\Http\Controllers\frontend\ProductController as SanPhamController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\OrderdetailController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\TopicController;
use App\Http\Controllers\backend\UserController;

Route::get('/', [HomeController::class,'index']);
Route::get('/san-pham', [SanPhamController::class,'index']);

Route::get('/chi-tiet-san-pham/[slug]', [SanPhamController::class,'index']);
Route::get('/lien-he', [LienheController::class,'index']);
Route::prefix("admin")->group(function(){
    Route::get('/', [DashboardController::class,'index'])->name("admin.dashboard.index");
    Route::prefix("product")->group(function(){
        Route::get('/', [ProductController::class,'index'])->name("admin.product.index");
        Route::get('show', [ProductController::class,'show'])->name("admin.product.show");
        Route::get('create', [ProductController::class,'create'])->name("admin.product.create");
        Route::get('trash', [ProductController::class,'trash'])->name("admin.product.trash");
        Route::put('update/{id}', [ProductController::class,'update'])->name("admin.product.update");
        Route::get('delete/{id}', [ProductController::class,'delete'])->name("admin.product.delete");
        Route::post('store', [ProductController::class,'store'])->name("admin.product.store");
        Route::get('edit/{id}', [ProductController::class,'edit'])->name("admin.product.edit");  
        Route::get('restore/{id}', [ProductController::class,'restore'])->name("admin.product.restore");
        Route::delete('detroy/{id}', [ProductController::class,'detroy'])->name("admin.product.detroy");

    });
    Route::prefix("category")->group(function(){
        Route::get('/', [CategoryController::class,'index'])->name("admin.category.index");
        Route::get('trash', [CategoryController::class,'trash'])->name("admin.category.trash");
        Route::get('show', [CategoryController::class,'show'])->name("admin.category.show");
        Route::put('update/{id}', [CategoryController::class,'update'])->name("admin.category.update");
        Route::get('delete/{id}', [CategoryController::class,'delete'])->name("admin.category.delete");
        Route::post('store', [CategoryController::class,'store'])->name("admin.category.store");
        Route::get('edit/{id}', [CategoryController::class,'edit'])->name("admin.category.edit");  
        Route::get('restore/{id}', [CategoryController::class,'restore'])->name("admin.category.restore");
        Route::delete('detroy/{id}', [CategoryController::class,'detroy'])->name("admin.category.detroy");

    });
    Route::prefix("brand")->group(function(){
        Route::get('/', [BrandController::class,'index'])->name("admin.brand.index");
        Route::get('trash', [BrandController::class,'trash'])->name("admin.brand.trash");
        Route::get('show', [BrandController::class,'show'])->name("admin.brand.show");
        Route::put('update/{id}', [BrandController::class,'update'])->name("admin.brand.update");
        Route::get('delete/{id}', [BrandController::class,'delete'])->name("admin.brand.delete");
        Route::post('store', [BrandController::class,'store'])->name("admin.brand.store");
        Route::get('edit/{id}', [BrandController::class,'edit'])->name("admin.brand.edit");  
        Route::get('restore/{id}', [BrandController::class,'restore'])->name("admin.brand.restore");
        Route::delete('detroy/{id}', [BrandController::class,'detroy'])->name("admin.brand.detroy");

    });
    Route::prefix("banner")->group(function(){
        Route::get('/', [BannerController::class,'index'])->name("admin.banner.index");
        Route::get('trash', [BannerController::class,'trash'])->name("admin.banner.trash");
        Route::get('show', [BannerController::class,'show'])->name("admin.banner.show");
        Route::put('update/{id}', [BannerController::class,'update'])->name("admin.banner.update");
        Route::get('delete/{id}', [BannerController::class,'delete'])->name("admin.banner.delete");
        Route::post('store', [BannerController::class,'store'])->name("admin.banner.store");
        Route::get('edit/{id}', [BannerController::class,'edit'])->name("admin.banner.edit");  
        Route::get('restore/{id}', [BannerController::class,'restore'])->name("admin.banner.restore");
        Route::delete('detroy/{id}', [BannerController::class,'detroy'])->name("admin.banner.detroy");

    });
    Route::prefix("contact")->group(function(){
        Route::get('/', [ContactController::class,'index'])->name("admin.contact.index");
        Route::get('show', [ContactController::class,'show'])->name("admin.contact.show");
        Route::get('trash', [ContactController::class,'trash'])->name("admin.contact.trash");
        Route::put('update/{id}', [ContactController::class,'update'])->name("admin.contact.update");
        Route::get('delete/{id}', [ContactController::class,'delete'])->name("admin.contact.delete");
        Route::post('store', [ContactController::class,'store'])->name("admin.contact.store");
        Route::get('edit/{id}', [ContactController::class,'edit'])->name("admin.contact.edit");  
        Route::get('restore/{id}', [ContactController::class,'restore'])->name("admin.contact.restore");
        Route::delete('detroy/{id}', [ContactController::class,'detroy'])->name("admin.contact.detroy");

    });
    
    Route::prefix("menu")->group(function(){
        Route::get('/', [MenuController::class,'index'])->name("admin.menu.index");
        Route::get('create', [MenuController::class,'create'])->name("admin.menu.create");
        Route::get('trash', [MenuController::class,'trash'])->name("admin.menu.trash");
        Route::get('show', [MenuController::class,'show'])->name("admin.menu.show");
        Route::put('update/{id}', [MenuController::class,'update'])->name("admin.menu.update");
        Route::get('delete/{id}', [MenuController::class,'delete'])->name("admin.menu.delete");
        Route::post('store', [MenuController::class,'store'])->name("admin.menu.store");
        Route::get('edit/{id}', [MenuController::class,'edit'])->name("admin.menu.edit");  
        Route::get('restore/{id}', [MenuController::class,'restore'])->name("admin.menu.restore");
        Route::delete('detroy/{id}', [MenuController::class,'detroy'])->name("admin.menu.detroy");

    });
    
    Route::prefix("order")->group(function(){
        Route::get('/', [OrderController::class,'index'])->name("admin.order.index");
        Route::get('trash', [OrderController::class,'trash'])->name("admin.order.trash");
        Route::get('show', [OrderController::class,'show'])->name("admin.order.show");
        Route::put('update/{id}', [OrderController::class,'update'])->name("admin.order.update");
        Route::get('delete/{id}', [OrderController::class,'delete'])->name("admin.order.delete");
        Route::post('store', [OrderController::class,'store'])->name("admin.order.store");
        Route::get('edit/{id}', [OrderController::class,'edit'])->name("admin.order.edit");  
        Route::get('restore/{id}', [OrderController::class,'restore'])->name("admin.order.restore");
        Route::delete('detroy/{id}', [OrderController::class,'detroy'])->name("admin.order.detroy");

    });
    
    Route::prefix("orderdetail")->group(function(){
        Route::get('/', [OrderdetailController::class,'index'])->name("admin.orderdetail.index");
        Route::get('trash', [OrderdetailController::class,'trash'])->name("admin.orderdetail.trash");
        Route::get('show', [OrderdetailController::class,'show'])->name("admin.orderdetail.show");
        Route::put('update/{id}', [OrderdetailController::class,'update'])->name("admin.orderdetail.update");
        Route::get('delete/{id}', [OrderdetailController::class,'delete'])->name("admin.orderdetail.delete");
        Route::post('store', [OrderdetailController::class,'store'])->name("admin.orderdetail.store");
        Route::get('edit/{id}', [OrderdetailController::class,'edit'])->name("admin.orderdetail.edit");  
        Route::get('restore/{id}', [OrderdetailController::class,'restore'])->name("admin.orderdetail.restore");
        Route::delete('detroy/{id}', [OrderdetailController::class,'detroy'])->name("admin.orderdetail.detroy");

    });
    
    Route::prefix("post")->group(function(){
        Route::get('/', [PostController::class,'index'])->name("admin.post.index");
        Route::get('trash', [PostController::class,'trash'])->name("admin.post.trash");
        Route::get('create', [PostController::class,'create'])->name("admin.post.create");
        Route::get('show', [PostController::class,'show'])->name("admin.post.show");
        Route::put('update/{id}', [PostController::class,'update'])->name("admin.post.update");
        Route::get('delete/{id}', [PostController::class,'delete'])->name("admin.post.delete");
        Route::post('store', [PostController::class,'store'])->name("admin.post.store");
        Route::get('edit/{id}', [PostController::class,'edit'])->name("admin.post.edit");  
        Route::get('restore/{id}', [PostController::class,'restore'])->name("admin.post.restore");
        Route::delete('detroy/{id}', [PostController::class,'detroy'])->name("admin.post.detroy");

    });
    
    Route::prefix("topic")->group(function(){
        Route::get('/', [TopicController::class,'index'])->name("admin.topic.index");
        Route::get('trash', [TopicController::class,'trash'])->name("admin.topic.trash");
        Route::get('show', [TopicController::class,'show'])->name("admin.topic.show");
        Route::put('update/{id}', [TopicController::class,'update'])->name("admin.topic.update");
        Route::get('delete/{id}', [TopicController::class,'delete'])->name("admin.topic.delete");
        Route::post('store', [TopicController::class,'store'])->name("admin.topic.store");
        Route::get('edit/{id}', [TopicController::class,'edit'])->name("admin.topic.edit");  
        Route::get('restore/{id}', [TopicController::class,'restore'])->name("admin.topic.restore");
        Route::delete('detroy/{id}', [TopicController::class,'detroy'])->name("admin.topic.detroy");

    });
    
    Route::prefix("user")->group(function(){
        Route::get('/', [UserController::class,'index'])->name("admin.user.index");
        Route::get('trash', [UserController::class,'trash'])->name("admin.user.trash");
        Route::get('create', [UserController::class,'create'])->name("admin.user.create");
        Route::get('show', [UserController::class,'show'])->name("admin.user.show");
        Route::put('update/{id}', [UserController::class,'update'])->name("admin.user.update");
        Route::get('delete/{id}', [UserController::class,'delete'])->name("admin.user.delete");
        Route::post('store', [UserController::class,'store'])->name("admin.user.store");
        Route::get('edit/{id}', [UserController::class,'edit'])->name("admin.user.edit");  
        Route::get('restore/{id}', [UserController::class,'restore'])->name("admin.user.restore");
        Route::delete('detroy/{id}', [UserController::class,'detroy'])->name("admin.user.detroy");

    });
    


});
