<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function allStudents(){
        
        $all_students = DB::table('students')->get();
        
        return view('crud.studentsList', ['all_students' => $all_students]);

    }


    public function addStudent(Request $request){
        
        $addStudent = DB::table('students')->insert([
            
            'name' => $request->userName,
            'email' => $request->userEmail,
            'phone' => $request->userPhone,
            'address' => $request->userAddress,
            'city' => $request->userCity

        ]);

        if($addStudent){

            return redirect()->route('allStudent');
            // echo "<h3>New student added successfully</h3>";
        }
        else{
            echo "<h3>Fail to add a new student</h3>";
        }

    }


    public function getSingleRecord(string $id){

        $getStudent = DB::table('students')->find($id);

        return view('crud.update_student', ['studentData' => $getStudent]);
        
    }


    public function updateStudent(Request $updateRequest, $id){

        $updateData = DB::table('students')
            ->where('id', $id)
            ->update([
                'name' => $updateRequest->userName,
                'email' => $updateRequest->userEmail,
                'phone' => $updateRequest->userPhone,
                'address' => $updateRequest->userAddress,
                'city' => $updateRequest->userCity
            ]);

        if($updateData){
            return redirect()->route('allStudent');
        }
        else{
            echo "Faild to update record";
        }

    }


    public function deleteStudent(string $id){
 
        $deleteStudent = DB::table('students')
            ->where('id', $id)
            ->delete();

        if($deleteStudent){
            return redirect()->route('allStudent');
        }
        else{
            echo "Faild to delete record";
        }

    }

}
