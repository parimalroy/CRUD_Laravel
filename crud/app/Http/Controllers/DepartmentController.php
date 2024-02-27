<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function showDept(){
        $dept = DB::table('departments')->get();
        return view('create',['department'=>$dept]);
    }
}
