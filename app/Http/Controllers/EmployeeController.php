<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
class EmployeeController extends Controller
{
    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {

        // try {
        // $request->validate([
        //     'employee_id' => 'required|unique:employees',
        //     'firstname' => 'required',
        //     'lastname' => 'required',
        //     'date_of_birth' => 'required|date',
        //     'education_qualification' => 'required',
        //     'address' => 'required',
        //     'email' => 'required|email|unique:employees',
        //     'phone' => 'required',
        // ]);

  


        // $employee = Employee::create($request->all());

        // return redirect()->route('empcreate')->with('success', 'Employee created successfully');
        // } catch (ValidationException $e) {

        //     return redirect()->route('empcreate')->withErrors($e->validator->errors());
        // } catch (\Exception $e) {

        //     return redirect()->route('empcreate')->with('error', 'Failed to create employee. Please try again.');
        // }


        $validator = Validator::make($request->all(), [
            'employee_id' => 'required|unique:employees',
            'firstname' => 'required',
            'lastname' => 'required',
            'date_of_birth' => 'required|date',
            'education_qualification' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:employees',
            'phone' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'resume' => 'file|mimes:pdf,doc,docx|max:2048', 
        ]);
    
        if ($validator->fails()) {
            return Redirect::route('empcreate')
                ->withErrors($validator)
                ->withInput(); 
        }

        $photoPath = null;
    $resumePath = null;

    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('photos', 'public');
    }

    if ($request->hasFile('resume')) {
        $resumePath = $request->file('resume')->store('resumes', 'public');
    }

    $employee = new Employee([
        'employee_id' => $request->input('employee_id'),
        'firstname' => $request->input('firstname'),
        'lastname' => $request->input('lastname'),
        'date_of_birth' => $request->input('date_of_birth'),
        'education_qualification' => $request->input('education_qualification'),
        'address' => $request->input('address'),
        'email' => $request->input('email'),
        'phone' => $request->input('phone'),
        'photo' => $photoPath,
        'resume' => $resumePath,
    ]);

    $employee->save();

        //  $employee = Employee::create($request->all());

        return redirect()->route('empcreate')->with('success', 'Employee created successfully');

    }

    public function list(Request $request)
    {
       
        $employees = Employee::query();



    $employees = $employees->paginate(10); 

    return view('employees.list', compact('employees'));
    }

    public function edit(Employee $employee)
{

    return view('employees.edit', compact('employee'));
}

public function destroy(Employee $employee)
{

    $employee->delete();

    return redirect()->route('list')->with('success', 'Employee deleted successfully');
}
public function update(Request $request, Employee $employee)
{

    $validator = Validator::make($request->all(), [
        'employee_id' => 'required|unique:employees,employee_id,' . $employee->id,
        'firstname' => 'required',
        'lastname' => 'required',
        'date_of_birth' => 'required|date',
        'education_qualification' => 'required',
        'address' => 'required',
        'email' => 'required|email|unique:employees,email,' . $employee->id,
        'phone' => 'required',
        // 'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // adjust the allowed file types and maximum size
        // 'resume' => 'file|mimes:pdf,doc,docx|max:2048', // adjust the allowed file types and maximum size
    ]);

    if ($validator->fails()) {
        return redirect()->route('list')
            ->withErrors($validator)
            ->withInput(); 
    }


    $employee->update($request->except(['photo', 'resume']));


    // $photoPath = null;
    // $resumePath = null;

    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('photos', 'public');
        $employee->update([
            'photo' => $photoPath,
        ]);
    }

    if ($request->hasFile('resume')) {
        $resumePath = $request->file('resume')->store('resumes', 'public');
        $employee->update([
            'resume' => $resumePath,
        ]);
    }



    return redirect()->route('list')->with('success', 'Employee updated successfully');
}
public function show(Employee $employee)
{
    return view('employees.show', compact('employee'));
}



}
