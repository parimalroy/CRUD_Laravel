<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeController extends Controller
{
    public function createEmp(){
        $emp =DB::table('employes')
        ->insert([
            'name'=>'Nur Nahar',
            'email'=>'nahar@gmail.coom',
            'position'=>'Graphic Desiginer',
            'gender'=>'Female',
            'address'=>'Khulna,Bangladesh',
            'hobby'=>'song',
            'dept_id'=>1,
        ]);
        
    }
}
