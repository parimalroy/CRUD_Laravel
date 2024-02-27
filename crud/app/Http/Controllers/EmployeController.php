<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeController extends Controller
{

    //insert Employes
    public function createEmp(Request $req){
        $emp =DB::table('employes')
        ->insert([
            'name'=>$req->name,
            'email'=>$req->email,
            'position'=>$req->position,
            'gender'=>$req->gender,
            'address'=>$req->address,
            'hobby'=>json_encode($req->hobby),
            'dept_id'=>$req->department
        ]);
        
        return redirect()->route('emp.show');
    }

    //show all Employe
    public function showEmp(){
        $emp =DB::table('employes')
        ->join('departments','employes.dept_id','=','departments.id')
        ->select('employes.id','employes.name','employes.email','employes.position','employes.gender','employes.hobby','employes.address','departments.DeptName')
        ->get();
        return view('show',['employes'=>$emp]);
    }


    //show single emp
    public function singleEmp(string $id){
        $emp =DB::table('employes')
        ->join('departments','employes.dept_id','=','departments.id')
        ->select('employes.id','employes.name','employes.email','employes.position','employes.gender','employes.hobby','employes.address','departments.DeptName')
        ->where('employes.id',$id)
        ->get();
        return view('single',['employes'=>$emp]);
    }


    public function editEmp(string $id){
        $emp =DB::table('employes')
        ->join('departments','employes.dept_id','=','departments.id')
        ->select('employes.id','employes.name','employes.email','employes.position','employes.gender','employes.hobby','employes.address','departments.DeptName')
        ->where('employes.id',$id)
        ->get();
        return view('update',['employes'=>$emp]);
    }

    //
}
