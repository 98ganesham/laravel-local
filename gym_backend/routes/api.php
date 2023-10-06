<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\Gym_PaymentController;
use App\Http\Controllers\GymController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\UserController;
use App\Models\Gym_Member_Details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//route for user
Route::get('/user', 'UserController@index');

//route for gym
Route::resource('gym', GymController::class);

//route for trainer
Route::resource('trainer', TrainerController::class);

//route for services which gym provides
Route::resource('services', ServiceController::class);

//route for gym-member-details
Route::resource('gym_member_details', Gym_Member_Details::class);

//route for gym-payment-method
Route::resource('gym_payment', Gym_PaymentController::class);

//route for feedback for gym
Route::resource('feedback', FeedbackController::class);