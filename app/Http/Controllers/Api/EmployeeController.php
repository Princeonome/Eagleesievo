<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use App\Http\Resources\EmployeeResource;
use App\Services\EmployeeService;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $employees = EmployeeResource::collection(Employee::latest()->get());
        return response()->json([
            'data'=>$employees,
            'message'=>'Employees Retrieved Successfully'],
             200);

    }

    
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
          $data = $request->validated();
          (new EmployeeService())->saveEmployee($data);
          return response()->json(['message'=>'Employee Created Successfully'],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $getEmployee_data = new EmployeeResource(Employee::where('id',$id)->first());
        return response()->json(['data'=>$getEmployee_data,'message'=>'Employee Retrieved Successfully'],200);

    }

    
    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRequest $request, string $id)
    {
        $getEmployee_data = Employee::where('id',$id)->first();
        if(is_null($getEmployee_data)){
           return response()->json(['message'=>'Employee not found'],404);
        }else{
             $update_data = $request->validated();
             $getEmployee_data->update($update_data);
             return response()->json(['message'=>'Employee updated'],201);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $getEmployee_data = Employee::where('id',$id)->first();
        if(is_null($getEmployee_data)){
            return response()->json(['message'=>'Employee not found'],404);
        }else{
            $result = $getEmployee_data->delete();
            return response()->json(['message'=>'Employee deleted']);
        }
    }
}

