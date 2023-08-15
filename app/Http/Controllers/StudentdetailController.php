<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\StudentDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Response;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\Validator;

class StudentdetailController extends Controller
{
    public function index()
    {
        $stu=Student::with('studentDetails')->get();
        return compact('stu');
    }


    // public function store(Request $request)
    // {
       
    //  $request->validate([
    //         'fullname' => 'required',
    //         'email' => 'required',
    //         'phone' => 'required'
    // ]);

    //     $student = Student::create([
            
    //         'fullname'=>$request->fullname,
    //         'email'=>$request->email,
    //         'phone'=>$request->phone,
    //     ]);
    //     $student->studentDetails()->create([

    //         'address'=>$request->address,
    //         'department'=>$request->department,
    //         'roll_no'=>$request->roll_no,
    //     ]); 
        
    // }
    

    public function store(StorePostRequest $request)
    {
        
        $request->validated();
        
        
        $student = new Student;
        $student->fullname = $request->fullname;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();
        $studentDetails = new StudentDetail;
        $studentDetails->address = $request->address; 
        $studentDetails->department = $request->department; 
        $studentDetails->roll_no = $request->roll_no;
        
        $student->studentDetails()->save($studentDetails); 
       
    }  



    public function update (StorePostRequest $request, $id){
        // $request->validated();
        $student = Student::find($id);
        $student->fullname = $request->fullname;
        $student->email = $request->email;
        $student->phone = $request->phone;
      
        $student->studentDetails->address = $request->address; 
        $student->studentDetails->department = $request->department; 
        $student->studentDetails->roll_no = $request->roll_no;

        $student->push();        
    }


    public function destroy($id)
    {
        
        return Student::destroy($id);
    }

}
