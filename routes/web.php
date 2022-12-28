<?php

use App\Http\Controllers\UIF\UIFAboutUsController;

use App\Http\Controllers\Management\ManagementUserController;
use App\Http\Controllers\Management\ManagementCategoryController;
use App\Http\Controllers\Management\ManagementNewsController;
use App\Http\Controllers\Management\ManagementIndexController;
use App\Http\Controllers\Management\ManagementMailController;
use App\Http\Controllers\Management\ManagementSubscriberController;
use App\Http\Controllers\UIF\UIFNewsController;
use App\Http\Controllers\UIF\UIFContactController;
use App\Http\Controllers\UIF\UIFIndexController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Redirect;



Route::group(['prefix' => 'yonetim', 'namespace' => 'Management'], function () {
    Route::redirect('/', '/yonetim/oturumac');

    Route::match(['get', 'post'], '/oturumac', [ManagementUserController::class, 'login'])->name('management.login');
    Route::post('/oturumukapat', [ManagementUserController::class, 'logout'])->name('management.logout');
    Route::group(['middleware' => 'management'], function () {

        Route::get('/anasayfa', [ManagementIndexController::class, 'index'])->name('management.index');
        Route::group(['prefix' => 'kullanici'], function () {
            Route::match(['get', 'post'], '/', [ManagementUserController::class, 'index'])->name('management.user');
            Route::get('/ekle', [ManagementUserController::class, 'form'])->name('management.user.add');
            Route::get('/duzenle/{id}', [ManagementUserController::class, 'form'])->name('management.user.update');
            Route::post('/kaydet/{id?}', [ManagementUserController::class, 'save'])->name('management.user.save');
            Route::get('/sil/{id}', [ManagementUserController::class, 'delete'])->name('management.user.delete');
        });
        Route::group(['prefix' => 'kategori'], function () {
            Route::match(['get', 'post'], '/', [ManagementCategoryController::class, 'index'])->name('management.category');
            Route::get('/ekle', [ManagementCategoryController::class, 'form'])->name('management.category.add');
            Route::get('/duzenle/{id}', [ManagementCategoryController::class, 'form'])->name('management.category.update');
            Route::post('/kaydet/{id?}', [ManagementCategoryController::class, 'save'])->name('management.category.save');
            Route::get('/sil/{id}', [ManagementCategoryController::class, 'delete'])->name('management.category.delete');
        });
        Route::group(['prefix' => 'mail'], function () {
            Route::match(['get', 'post'], '/', [ManagementMailController::class, 'index'])->name('management.mail');
            Route::get('/sil/{id}', [ManagementMailController::class, 'delete'])->name('management.mail.delete');
        });
        Route::group(['prefix' => 'abone'], function () {
            Route::match(['get', 'post'], '/', [ManagementSubscriberController::class, 'index'])->name('management.subscriber');
            Route::get('/sil/{id}', [ManagementSubscriberController::class, 'delete'])->name('management.subscriber.delete');
        });

        Route::group(['prefix' => 'haber'], function () {
            Route::match(['get', 'post'], '/', [ManagementNewsController::class, 'index'])->name('management.news');
            Route::get('/ekle', [ManagementNewsController::class, 'form'])->name('management.news.add');
            Route::get('/duzenle/{id}', [ManagementNewsController::class, 'form'])->name('management.news.update');
            Route::post('/kaydet/{id?}', [ManagementNewsController::class, 'save'])->name('management.news.save');
            Route::get('/sil/{id}', [ManagementNewsController::class, 'delete'])->name('management.news.delete');
        });


        Route::group(['prefix' => 'Hesabım'], function () {
            Route::get('/duzenle/{user_name}', [ManagementUserController::class, 'account'])->name('management.account');
            Route::post('/kaydet/{id}', [ManagementUserController::class, 'save'])->name('management.account.save');
        });
    });
});


Route::get('/', [UIFIndexController::class, 'index'])->name('uif.index');

Route::group(['prefix' => 'Haberler'], function () {
    Route::match(['get', 'post'], '/', [UIFNewsController::class, 'index'])->name('uif.news');
    Route::get('/{slug}', [UIFNewsController::class, 'detail'])->name('uif.news.detail');
    Route::get('/kategori/{category_slug}', [UIFNewsController::class, 'category_news'])->name('uif.news.category_news');
});
Route::match(['get', 'post'], '/iletisim', [UIFContactController::class, 'index'])->name('uif.contact');
Route::get('/hakkimizda', [UIFAboutUsController::class, 'index'])->name('uif.aboutus');
Route::post('/aboneol', [UIFContactController::class, 'subscriber'])->name('uif.subscriber');
