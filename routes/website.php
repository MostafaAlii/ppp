<?php

use App\Http\Controllers\Frontend;
use App\Http\Controllers\Frontend\Cms;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Website Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['as' => 'website.'], function () {
    Route::get('/',[Frontend\FrontController::class, 'index'])->name('home');

    Route::group(['prefix' => 'client', 'middleware' => ['auth:web']], function () {
        Route::prefix('dashboard')->group(function () {
            Route::get('editProfile',[Frontend\ClientController::class, 'editProfile'])->name('editProfile');
            Route::post('ProfileEdit',[Frontend\ClientController::class, 'ProfileEdit'])->name('ProfileEdit');
            Route::get('/', [Frontend\ClientController::class, 'index'])->name('client.dashboard');
            Route::get('retouching-style', [Frontend\RetouchingStyleController::class, 'index'])->name('client.retouchingStyle');
            Route::post('retouching-style/save', [Frontend\RetouchingStyleController::class,'save'])->name('retouching-style.save');
            Route::resource('orders', Frontend\OrderController::class);
            Route::get('delete-service/{id}/{order_id}', [Frontend\OrderController::class, 'deleteService'])->name('order.delete.service');
            Route::put('orders/{order}/update_details', [Frontend\OrderController::class, 'updateDetails'])->name('order.update_details');
            Route::put('orders/complete', [Frontend\ClientController::class, 'getCompleteOrder'])->name('order.completed');
            Route::put('orders/progress', [Frontend\ClientController::class, 'getProcessOrder'])->name('order.progress');

            Route::get('order/checkout/{order_id}/cancelled', [Frontend\OrderController::class, 'cancelled'])->name('order.checkout.cancel');
            Route::get('order/checkout/{order_id}/completed', [Frontend\OrderController::class, 'completed'])->name('order.checkout.complete');
            Route::get('order/checkout/webhook/{order?}/{env?}', [Frontend\OrderController::class, 'webhook'])->name('order.check.webhook.ipn');
        });
    });

    Route::group(['prefix' => 'client', 'middleware' => ['guest:web']], function () {
        Route::resource('free-orders', Frontend\FreeOrderController::class);
        Route::put('orders/{order}/update_details', [Frontend\FreeOrderController::class, 'updateDetails'])->name('free-order.update_details');
        Route::put('orders/{order}/newUpdate', [Frontend\FreeOrderController::class, 'newUpdate'])->name('free-order.newUpdate');
    });

    Route::group(['prefix' => 'page', 'middleware' => ['guest:web']], function () {
        Route::resource('prices', Cms\PriceController::class);
        Route::resource('examples', Cms\ExampleController::class);
        Route::get('photo_album', [Cms\ExampleController::class, 'photo_album'])->name('photo_album');
        Route::get('photo_frame', [Cms\ExampleController::class, 'photo_frame'])->name('photo_frame');
        Route::get('photo_flyer', [Cms\ExampleController::class, 'photo_flyer'])->name('photo_flyer');
        
        Route::prefix('tours')->group(function () {
            Route::get('/', [Cms\TourController::class, 'step_one'])->name('tour.step_one');
            Route::get('step_two', [Cms\TourController::class, 'step_two'])->name('tour.step_two');
            Route::get('step_three', [Cms\TourController::class, 'step_three'])->name('tour.step_three');
            Route::get('video', [Cms\TourController::class, 'video'])->name('tour.video');
        });

        Route::get('faq', [Cms\FaqController::class, 'index'])->name('faq');
        Route::get('contact', [Cms\ContactController::class, 'index'])->name('contact');
        Route::get('about', [Cms\AboutController::class, 'index'])->name('about');
        Route::get('offer', [Cms\OfferController::class, 'index'])->name('offer');
        Route::get('terms', [Cms\TermController::class, 'index'])->name('term');
        Route::get('privecy', [Cms\PrivacyController::class, 'index'])->name('privecy');
        Route::get('copyright', [Cms\CopyrightController::class, 'index'])->name('copyright');
    });
});

require __DIR__.'/auth.php';