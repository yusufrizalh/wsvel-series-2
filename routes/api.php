<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// request Http GET dengan Guzzle
Route::get("posts", [RequestController::class, "postsListing"]);

// request Http POST dengan Guzzle
Route::post("create-post", [RequestController::class, "createPost"]);

// request Http PUT dengan Guzzle
Route::put("update-post", [RequestController::class, "updatePost"]);

// request Http PUT dengan Guzzle
Route::delete("delete-post", [RequestController::class, "deletePost"]);
