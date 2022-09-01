<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Exceptions\ApiException;
use App\Exceptions\NotFoundException;
use App\Helpers\Notifications\TelegramNotification;
use App\Http\Requests\EmployeeRequest;
use App\Project;
use App\Services\CreateEmployeeService;
use App\Validators\EmployeeUpdateValidator;
use App\Validators\EmployeeValidator;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $employees = Employee::all();
        return response()->json(['data' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request): JsonResponse
    {
        $validator = EmployeeValidator::make_validator($request->all());
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $employee = new CreateEmployeeService([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'projects' => $request->get('projects')
        ]);
        $new_employee = DB::transaction(function () use ($employee) {
            return $employee->createEmployee();
        });
        return response()->json(['data' => $new_employee]);
    }

    /**
     * Display the specified resource.
     *
     * @param Employee $employee
     * @return JsonResponse
     * @throws NotFoundHttpException
     */
    public function show(Employee $employee, $id): JsonResponse
    {
        try {
            $employee = Employee::find($id);
            $employee['projects'] = $employee->projects;
            if (!isset($employee)) {
                throw new NotFoundException('Item not found', 404);
            }
            return response()->json(['data' => $employee]);
        } catch(NotFoundException $e) {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Employee $employee
     * @return Response
     */
    public function update(Request $request, $id): JsonResponse
    {
        $validator = EmployeeUpdateValidator::make_validator(array_merge(['id' => $id], $request->all()));
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $employeeService = new CreateEmployeeService($request->all(), $id);
        $e = $employeeService->updateEmployee();
        return response()->json(['data' => $e]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Employee $employee
     * @return Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
