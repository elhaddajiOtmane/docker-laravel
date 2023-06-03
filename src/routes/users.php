<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConstomerController;

/**
 * @OA\Info(
 *     version="1.0.0",
 *    title="Laravel API",
 *   description="Laravel API Swagger",
 *  @OA\Contact(
 *     email="
 *  )
 *
 */Route::get('.users','ConstomerController@index')->name('user.index');


