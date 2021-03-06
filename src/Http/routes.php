<?php

use GeneaLabs\LaravelGovernor\Http\Controllers\AssignmentsController;
use GeneaLabs\LaravelGovernor\Http\Controllers\EntitiesController;
use GeneaLabs\LaravelGovernor\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Route;

Route::resource('genealabs/laravel-governor/roles', RolesController::class, ['except' => ['show']]);
Route::resource('genealabs/laravel-governor/entities', EntitiesController::class, ['except' => ['show']]);
Route::resource('genealabs/laravel-governor/assignments', AssignmentsController::class, ['only' => ['index', 'store']]);
