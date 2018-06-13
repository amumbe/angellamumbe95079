<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    
        public function showWelcome(){
            
        return View::make('home', $data);
        }
        public function getStudent(){
            return view('angellamumbe.student');
        }
        public function getFees(){
            return view('angellamumbe.fees');
        }
    
}
