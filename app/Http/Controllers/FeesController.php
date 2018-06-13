<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class FeesController extends Controller
{
   
    public function store(Request $request)
    {
    
        $fees= new \App\fees;
        $fees->student_id=$request->get('student_id');
        $fees->amount=$request->get('amount');
        
        $fees->date_paid = $request->get('date_paid');
        $fees->save();
        
        return back()->with('success', 'Information has been added');
    } 

    public function index(){
        return view('angellamumbe.fees');
    }

}
