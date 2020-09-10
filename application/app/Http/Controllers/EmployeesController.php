<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=Employee::all();
        return view("/employees/employees",compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("/employees/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation

        $data=$this->validate_info();

        $name=request('emp_name');
        $email=request('email');
        $bio=request('bio');
        $salary=request('salary');

        #create object from model #insert into database (set of items)
        Employee::create([
            "emp_name"=>$name,
            "email"=>$email,
            "bio"=>$bio,
            "salary"=>$salary
        ]);

        return redirect('/employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        
        // return "welcome";
        // $emp = Employee::findOrFail($employee->id); #null -> not exits (404)

        return view('/employees/show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        // return the edit view 
        return view('/employees/edit', compact('employee'));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
        $data=$this->validate_info();
        // 

        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        // return view('/employees/show', compact('employee'));
        $employee->delete();
        return redirect('/employees');
    }

    public function validate_info(){
       return request()->validate([
            "emp_name"=>"required|min:3",
            "email"=>"required|email",
            "salary"=>"numeric"
        ]);
    }
}
