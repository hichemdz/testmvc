<?php

//require_once './init.php';
require_once 'test_router.php';

/*

 this's the last result, So what do you watch?

 yes this is like class::methode() So this is a static method
 
 Good now you have a 25% for the idea.
 that is great ?
 Now, what'is left for you?

 take our go to create classs



*/

//Route::get('/home',[Home::class,'index']);
Route::get('/',[Home::class,'index']);

Route::get('/contact',[Home::class,'contact']);




