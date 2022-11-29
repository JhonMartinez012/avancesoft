<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function update(Request $request, $id){
        try {
            $employee = Employee::where('employeeId',$id);
            $employee->update($request->all());

            return response()->json([
                'message' => 'Employee updated successfully',
            ], 200);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        
    }
}
