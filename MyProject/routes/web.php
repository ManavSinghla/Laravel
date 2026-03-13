<?php

use Illuminate\Support\Facades\Route;

// Route::get('/student/{name}', function ($name) {
//     return "welcome student, $name";
// });

// Route::get('/city/{name?}', function ($name="Unknown") {
//     return "City: $name";
// });

// Route::get('/product/{name}/{price}', function ($name,$price) {
//     return "Thankyou for Shopping $name, your bill is $price";
// });
// Route::get('/', function () {
//     return view('welcome');
// });

// required routing
// Route::get('/username/{name}', function ($name) {
//     return "welcome, $name";
// });
// optional routing
// Route::get('/username/{name?}', function ($name="User123") {
//     return "welcome, $name";
// });

// multiple routing
// Route::get('/username/{name}/{id}', function ($name,$id) {
//     return "welcome, $name <br>your id is: $id";
// });

//Constraint Routing based upon condition on numeric data
// Route::get('/home/{id}',function($id){
//     return "The value of id is: $id";
// })->where('id','[0-9]{2,4}'); // '[0-9]{4}' means only 4 digits accepted '[0-9]{2,4}' means 2 to 4 digits required

// //Constraint routing based with alphabets
// Route::get('/home/{id}',function($id){
//     return "The value of id is: $id";
// })->where('id','[A-Za-z]+'); 

// // Specific alphabet constraint routing--------------------------------------------------
// Route::get('/home/{id}',function($id){
//     return "The value of id is: $id";
// })->where('id','[k]{1}'); 
// Route::get('/home/k',function(){
//     return "The value of id is: k";
// });
// Route::get('/home/{id}',function($id){
//     return "The value of id is: $id";
// })->where('id','k');  // three ways of doing this
// // ------------------------------------------------------------------------------------------
// // Specific set of alphabet constraint routing
// Route::get('/home/{id}',function($id){
//     return "The value of id is: $id";
// })->where('id','[abc]{1}'); 


// // Group Routing with Prefix
// Route::prefix('master')->group(function(){
//     Route::get('/home',function(){
//         return "I am inside about";
//     });
//     Route:: get('/about', function(){
//     return "I am inside home";
//     });
//     Route:: get('/contact',function(){
//         return "I am inside home";
//     });
// });

// // Group Routing without prefix
// Route::group([],function(){
//     Route::get('home1',function(){
//         return "Inside Home";
//     });
//     Route::get('/about1',function(){
//         return "Inside About";
//     });
// });

// // Question
// Route::get('/home',function(){
//     return 'Welcome to Home Page';
// });
// Route::prefix('home')->group(function(){
//     Route::get('/events', function(){
//         return "Id: 111<br>Event:Dance<br><br><br>Id: 112<br>Event:Singing";
//     });
//     Route::get('/{id}',function($id){
//         if($id=='111'){
//             return 'Dance';
//         }
//          if($id=='112'){
//             return 'Singing';
//         }

//     })->where('id','[0-9]{3}');
//     Route::get('/register/{name}/{roll}', function($name,$roll){
//     return "$name You are registered Successfully";
// })->where('roll','[0-9]{8}');
// Route::get('details/{name}/{roll}/{branch?}', function($name,$roll,$branch="CSE"){
//     return "Name: $name<br>Roll No.:$roll<br>Branch:$branch";
// })->where('roll','[0-9]{8}');
// });


// Route::Fallback(function(){
//     return "OOPS... BETTER LUCK NEXT TIME";
// });

Route::view('/', 'welcome');
Route::view('/details', 'details')->name('details');

// passing values to the views
Route::get('/',function(){
    $courses= ["php",'c','c++','java','python'];
    return view('details',['course'=>$courses]); 
});
