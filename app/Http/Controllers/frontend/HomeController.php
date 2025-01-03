<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $t_details = DB::table('teacher_details')
            ->join('teachers', 'teacher_details.teacher_id', '=', 'teachers.id')
            ->join('courses', 'teacher_details.course_id', '=', 'courses.id')
            ->join('majors', 'teacher_details.major_id', '=', 'majors.id')
            ->select(
                'teacher_details.*', 
                'teachers.*',
                'courses.*',
                'majors.*'
                )
            ->get();
        return view('frontend.Home.index')
        ->with('t_details', $t_details); 
    }
}
