<?php
// app/routes.php

// ===================================
// HOME PAGE =========================
// ===================================
Route::get('/', function() {
	//we don't need to use Laravel Blade
	// we will return a PHP file that will hold all of our Angular content
	// see the "Where to Place Angular Files" to see ideas on how to structure
	return View::make('index'); // will return app/views/index.php
});

// ==================================
// API ROUTES =======================
// ==================================
Route::group(array('prefix' => 'api'), function() {
	// since we will be using this for CRUD, we won't need create and edit
	// Angular will handle both those forms
	// this ensures that a user can't access api/create or api/edit when nothing is there
	Route::resource('comments', 'CommentController',
	  array('except' => array('create','edit', 'update')));
});

// ==================================
// CATCH ALL ROUTE ==================
// ==================================
// all routes that are not home or api will be redirected to the frontend
// this allows angular to route them
App::missing(function($exception) {
	return View::make('index');
});
