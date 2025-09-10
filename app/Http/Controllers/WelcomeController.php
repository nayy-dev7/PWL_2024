<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class WelcomeController extends Controller{
//     public function hello(){
//         return 'Hello World';
//     }public function greeting(){ 
//         return view('blog.hello', ['name' => 'Naya']); 
//     } 
// }
// no.11 park 3
class WelcomeController extends Controller{
     public function hello(){ 
        return('Hello World'); 
    }public function greeting(){ 
        return view('blog.hello') 
            ->with('name','Naya') 
            ->with('occupation','Developer'); 
    }
}

?>