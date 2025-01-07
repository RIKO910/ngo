<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class CustomerListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();

        return view('backend.pages.employee', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'email' => 'required|email|unique:employees,email',
            'phone' => 'required',
            'country' => 'required',
            'experience' => 'required',
            'join_date' => 'required',
        ]);

        Employee::create($request->all());
        return redirect()->route('employees.index');


//        return response()->json(['success' => 'Employee added successfully!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::findOrFail($id); // Adjust with your actual model
        return response()->json($employee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {

        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'phone' => 'required',
            'country' => 'required',
            'experience' => 'required',
            'join_date' => 'required|date',
        ]);

        $employee->update($request->all());

        return response()->json(['success' => 'Employee updated successfully!']);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index');

//        return response()->json(['success' => 'Employee deleted successfully!']);
    }
}
