<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\fees;

class StudentController extends Controller
{

    //view all records
    public function showall(){
    
        $student = student::all();

          
          foreach ($student as $s) {
           // $total_fees = $this->total_fees($s->id);
            $total_fees = fees::all()->where('student_id','=',$s->id)->sum('amount');
            $s['total'] = $total_fees; 
          }

        
        $sum_all_fees = fees::all()->sum('amount');
        return view('angellamumbe.totalfees',['students'=>$student,'all_fees'=>$sum_all_fees]);
    }

    
    public function total_fees($student_id){
      $student_total_fees = student::find($student_id)->fees->sum('amount_paid');
      return $student_total_fees;
    }

    
    public function show_student_info($student_id){
        $student = student::find($student_id)->fees;//relationship
        $student_name = student::find($student_id)->full_name;
        return view('angellamumbe/student_information',['student'=>$student,'student_name'=>$student_name,'student_number'=>$student_id]);
        
    }

    public function search(){

    }

  
    public function store(Request $request)
    {
        $student= new \App\student;
        $student->full_name=$request->get('full_name');
        $student->address=$request->get('address');
        $student->date_of_birth = $request->get('date_of_birth');
        $student->save();
        //return redirect('student')->with('success', 'Information has been added');
        return redirect()->back()->with('message', 'New student saved.');
    }

    
     
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
