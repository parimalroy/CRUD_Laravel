<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeController extends Controller
{
    //insert Employes
    public function createEmp(Request $req)
    {
        // $req->validate([
        //     'name'=>'required',
        //     'email'=>'required | unique:employes,email',
        //     'position'=>'required',
        //     'address'=>'required',
        //     'gender'=>'required',
        //     'dept_id'=>'required'
        // ]);
       
         DB::table('employes')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'position' => $req->position,
            'gender' => $req->gender,
            'address' => $req->address,
            'hobby' => json_encode($req->hobby),
            'dept_id' => $req->department,
        ]);
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('emp.show');
    }

    //show all Employe
    public function showEmp()
    {
        $emp = DB::table('employes')
        ->join('departments', 'employes.dept_id', '=', 'departments.id')
        ->select('employes.id', 'employes.name', 'employes.email', 'employes.position', 'employes.gender', 'employes.hobby', 'employes.address', 'departments.DeptName')
        ->paginate(5);
        return view('show', ['employes' => $emp]);
    }

    //show single emp
    public function singleEmp(string $id)
    {
        $emp = DB::table('employes')
        ->join('departments', 'employes.dept_id', '=', 'departments.id')
        ->select('employes.id', 'employes.name', 'employes.email', 'employes.position', 'employes.gender', 'employes.hobby', 'employes.address', 'departments.DeptName')->where('employes.id', $id)
        ->get();
        return view('single', ['employes' => $emp]);
    }

    public function editEmp(string $id)
    {
        $emp = DB::table('employes')->join('departments', 'employes.dept_id', '=', 'departments.id')
        ->select('employes.id', 'employes.name', 'employes.email', 'employes.position', 'employes.gender', 'employes.hobby', 'employes.address', 'employes.dept_id', 'departments.DeptName')->where('employes.id', $id)
        ->get();

        $dept = DB::table('departments')->get();
        return view('update', ['employes' => $emp, 'department' => $dept]);
    }

    

    //update employes 
    public function updateEmp(Request $req, string $id)
    {
        DB::table('employes')
            ->where('id', $id)
            ->update([
                'name' => $req->name,
                'email' => $req->email,
                'position' => $req->position,
                'gender' => $req->gender,
                'address' => $req->address,
                'hobby' => json_encode($req->hobby),
                'dept_id' => $req->department,
            ]);
        toastr()->success('Data has been Updated successfully!', 'Congrats');
        return redirect()->route('emp.single', [$id]);
    }


    // delete employes

    public function deleteEmp(Request $req){
        $emp =DB::table('employes')->whereIn('id',$req->ids)->delete();
        return redirect()->back();
    }
}
