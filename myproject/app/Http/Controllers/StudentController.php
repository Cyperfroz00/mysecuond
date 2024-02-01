<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'name'=>'required|string|max:255|min:2',
            'gender'=>'required|string|min:4|max:6',
            'attendent'=>'required|numeric',
            'activity'=>'required|numeric',
            'exam' => 'required|numeric',
            'profile' => 'required|mimes:jpg,png,gif,jpeg',
        ]);

        $name = $request -> name;
        $gender = $request -> gender;
        $att = $request -> attendent;
        $act = $request -> activity;
        $exam = $request -> exam;
        $profile = $request->profile;
        
        if($profile){
            $newProfile = rand(1,99999).'-'.$profile->getClientOriginalName();
            $path = 'image';
            $profile->move($path,$newProfile);
        }

        $total = $att + $act;
        $avg = $total / 3;

        if($avg>=90){
            $grade = 'A';
        } else if ($avg >=80){
            $grade = 'B';
        } else if($avg>=70){
            $grade ='C';
        } else if($avg>=60){
            $grade ='D';
        } else if ($avg>=50){
            $grade ='E';
        } else{
            $grade='F';
        }

        Student::Create([
           'name' => $name,
           'gender' => $gender,
           'Attendent' => $att,
           'Activity' => $act,
           'Exam' => $exam,
           'Total'=> $total,
           'Average'=> $avg,
           'grade' => $grade,
           'profile'=> $newProfile,
        ]);
        return redirect('/add') ->with ('success','Create  Student Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        $data = Student::all();
        return view('View',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student ,$id)
    {   
        // $update_data = Student::find($id);
        $update_data = Student::select("*")->where('id',$id)->first();
        return view('update',compact('id','update_data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update (Request $request, Student $student)
    {
        $this->validate($request,[
            'name'=>'required|string|max:255|min:2',
            'gender'=>'required|string|min:4|max:6',
            'attendent'=>'required|numeric',
            'activity'=>'required|numeric',
            'exam' => 'required|numeric',
            // 'profile' => 'required|mimes:jpg,png,gif,jpeg',
        ]);

            $name = $request -> name;
            $gender = $request -> gender;
            $att = $request -> attendent;
            $act = $request -> activity;
            $exam = $request -> exam;
            $profile = $request -> profile;
            $id = $request -> id;
            
        if($profile){
            $newProfile = rand(1,99999).'-'.$profile->getClientOriginalName();
            $path = 'image';
            $profile->move($path,$newProfile);
        }else{
            $newProfile = $request->old_thumbnail;
        }

            $total = $att + $act;
            $avg = $total / 3;

            if($avg>=90){
                $grade = 'A';
            } else if ($avg >=80){
                $grade = 'B';
            } else if($avg>=70){
                $grade ='C';
            } else if($avg>=60){
                $grade ='D';
            } else if ($avg>=50){
                $grade ='E';
            } else{
                $grade='F';
            }

            Student::where('id',$id)->update([
                'name' => $name,
                'gender' => $gender,
                'Attendent' => $att,
                'Activity' => $act,
                'Exam' => $exam,
                'Total'=> $total,
                'Average'=> $avg,
                'grade' => $grade,
                'profile'=> $newProfile,
            ]);

        return redirect('/view') ->with ('updatesuccess','Update Success');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request ,Student $student)
    {
        $remove_id = $request->remove_id;
        return $remove_id;
    }
}
