<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
        public function Students() {
            return view('students');
        }
/*
    public function listStudent() {

        $students = DB::table('students')->select(
            "name", "email as levél"
        )->find( 5 );

        echo"<pre>";
        print_r( $students );
    }

public function listStudent() {

    $students = DB::table('students')->where( "email", "like", "%gmail.com" )->get();

    echo"<pre>";
    print_r( $students );
}

SELECT * FROM students WHERE id =  AND email = "valami@teszt.hu"

*/
public function listStudent() {

    $students = DB::table('students')->where( "id", "=", 9)->get();

    echo"<pre>";
    print_r( $students );
}
}
