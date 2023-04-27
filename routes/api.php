<?php

use App\Http\Controllers\api\RDVController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "v1"], function(){
    Route::resource('rdv', RDVController::class);
});
