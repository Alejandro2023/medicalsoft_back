<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{

    public function getAll()
    {
        return Employee::all();
    }

    public function getByMonth(Request $date)
    {
        return Employee::whereRaw('MONTH(join_date) =' . $date->month . ' and YEAR(join_date) =' . $date->year)->get();
    }

    public function show(Employee $employee)
    {
        return $employee;
    }

    public function store(Request $request)
    {
        Employee::create($request->all());
        return response()->json(['msg' => 'Se ha creado']);
    }

    public function update(Request $request, Employee $employee)
    {
        $employee->update($request->all());
        return response()->json(['msg' => 'Se ha actualizado']);
    }

    public function destroy(Employee $employee)
    {
        $employee->update(['status_' => 0]);
        return response()->json(['msg' => 'Se ha eliminado']);
    }
}
