<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course;

use App\User;

use App\Teacher;

use Auth;

use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            $teacher = Teacher::all();
            $user = User::all();
            $course = Course::all();
            return view('teacher.index',compact("teacher","user","course"));

        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = Course::all();
        return view('teacher.create',compact("course"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $request->validate([
            "photo" => "required|image|mimes:jpeg,png,jpg,gif,svg", 
            "name" => "required|min:5",
            "email"=>'email:rfc,dns',
            "password"=>"required",
            "gender"=>"required",
            "degree"=>"required",
            "phone_no"=>"required",

        ]);
        //storing image in folder
        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // brandimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('teacher_img', $fileName, 'public');

            $path = '/storage/'.$filePath;

            

        }

        //storing in user table

        $user = new User;

        $user->name =  $request->name;
        $user->email = $request->email;

        $user->password = $request->password;
        
        $user->save();

        $user->assignRole('teacher');

        $teacher = new Teacher;
        $teacher->user_id = $user->id;
        $teacher->profile = $path;
        $teacher->gender = $request->gender;
        $teacher->degree = $request->degree;
        $teacher->phone_no = $request->phone_no;
        $teacher->course_id = $request->course;

        $teacher->save();

        return redirect()->route('teacher.index');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher =Teacher::find($id);
        

        return view('teacher.show',compact('teacher'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
      
        $user = User::all();
        $course = Course::all();
        // $teachers = Teacher::all();
        // $id= $teacher->id;
        $teacher = Teacher::find($id);

        return view('teacher.edit',compact('teacher','course','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user , Teacher $teacher)
    {
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
        // $teacher = Teacher::find($user_id);
        

        $user = User:: whereId($user_id)->delete();

        return redirect()->route('teacher.index');
    }
}
