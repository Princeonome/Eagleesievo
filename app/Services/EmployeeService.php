<?php

namespace App\Services;

use App\Models\Employee;

class EmployeeService {

    public function saveEmployee($data){
       $result = Employee::create($data);
       return $result;
    }

}

