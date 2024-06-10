<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return "Welcome on my page ...";
});

Route::get('/users', function () {
    
    $us=DB::table('users')->get()->first();
    $us=DB::table('users')->first();
    dump($us);
     return "Liste des utilisateurs : ";
});

Route::get('/entreprises', function () {
    return DB::table('entreprises')->get();
});

// Route::get('/etudient', function (Request $request) {
//     //dump($request);
//     // $name = $_GET['name'] ?? "aucun nom";
//     // $age = $_GET['age'] ?? "pas d'age";
//     $name = $request['name'];
//     //$age = $request['age'];
//     $age = $request->input("age",12);
//     return "Etudient $name $age";
// });

Route::get('/etudient/{id}/{nom}', function (int $idet,String $name) {
    return "Etudient N° $idet - $name";
})->where(['id'=> '[0-9]+', 'name' => '[A-Za-z]+']);

Route::get('/etudients', function () {
    return "Liste des étudients ...";
});
