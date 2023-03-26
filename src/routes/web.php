<?php

use Illuminate\Support\Facades\Route;

//страница с формой Laravel регистрации пользователей
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//POST запрос регистрации на сайте
Route::post('register', 'Auth\RegisterController@register');


//Роуты главной страницы
Route::get('/', function () {
    $data = [];
    $service = \App\Models\Service::all()->toArray();
    if (!empty($service)) {
        $data['services'] = $service;
    }
    return view('welcome', $data);
});

Route::get('/home', function () {
    return view('welcome');
});

//Миграции
Route::get('/migrate', function () {
    \Illuminate\Support\Facades\Artisan::call('migrate');
    return \Illuminate\Support\Facades\Artisan::output();
});

//Морда
Route::get('about', [\App\Http\Controllers\about\AboutController::class, 'getAboutPage']);
Route::get('service', [\App\Http\Controllers\service\ServiceController::class, 'getServicePage']);
Route::get('appointment', [\App\Http\Controllers\appointment\AppointmentController::class, 'getAppointmentPage']);
Route::post('appointment', [\App\Http\Controllers\appointment\AppointmentController::class, 'postAppointmentPage']);
Route::get('contact', [\App\Http\Controllers\contact\ContactController::class, 'getContactPage']);
Route::get('blog', [\App\Http\Controllers\blog\BlogController::class, 'getBlogPage']);
Route::get('/blog/detail/', [\App\Http\Controllers\blog\BlogController::class, 'getBlockDetailPage']);

//Админка
Route::group(['prefix' => 'arm', 'middleware' => 'auth'], function () {
    Route::get('/home', [\App\Http\Controllers\arm\MainController::class, 'getMainPage']);
    Route::get('blog', [\App\Http\Controllers\arm\blog\ArmBlogController::class, 'getBlogPage']);
    Route::post('/blog/detail/', [\App\Http\Controllers\arm\blog\ArmBlogController::class, 'postBlockDetail']);
    Route::get('/blog/detail/delete/', [\App\Http\Controllers\arm\blog\ArmBlogController::class, 'DeleteBlockDetail']);
    Route::get('/blog/detail/', [\App\Http\Controllers\arm\blog\ArmBlogController::class, 'getBlockDetailPage']);

    Route::get('doctors', [\App\Http\Controllers\arm\doctors\ArmDoctorsController::class, 'getBlogPage']);
    Route::post('/doctors/detail/', [\App\Http\Controllers\arm\doctors\ArmDoctorsController::class, 'postBlockDetail']);
    Route::get('/doctors/detail/delete/', [\App\Http\Controllers\arm\doctors\ArmDoctorsController::class, 'DeleteBlockDetail']);
    Route::get('/doctors/detail/', [\App\Http\Controllers\arm\doctors\ArmDoctorsController::class, 'getBlockDetailPage']);

    Route::get('service', [\App\Http\Controllers\arm\service\ArmServiceController::class, 'getBlogPage']);
    Route::post('/service/detail/', [\App\Http\Controllers\arm\service\ArmServiceController::class, 'postBlockDetail']);
    Route::get('/service/detail/delete/', [\App\Http\Controllers\arm\service\ArmServiceController::class, 'DeleteBlockDetail']);
    Route::get('/service/detail/', [\App\Http\Controllers\arm\service\ArmServiceController::class, 'getBlockDetailPage']);

    Route::get('patients-feedback', [\App\Http\Controllers\arm\feedback\ArmFeedbackController::class, 'getFeedbackPage']);
    Route::post('/patients-feedback/detail/', [\App\Http\Controllers\arm\feedback\ArmFeedbackController::class, 'postFeedbackDetail']);
    Route::get('/patients-feedback/detail/delete/', [\App\Http\Controllers\arm\feedback\ArmFeedbackController::class, 'DeleteFeedbackDetail']);
    Route::get('/patients-feedback/detail/', [\App\Http\Controllers\arm\feedback\ArmFeedbackController::class, 'getFeedbacketailPage']);
    Route::post('/patients-feedback/detail/doctor/', [\App\Http\Controllers\arm\feedback\ArmFeedbackController::class, 'postFeedbackDetailDoctor']);
});

Auth::routes();
