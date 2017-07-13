<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }

    public function create()
    {
        $department['id'] = '';
        return view('departments.create', compact('department'));
    }

    public function store(Request $request)
    {
        $request['name'] = strtolower($request->name);

        $this->validate($request, [
            'code' => 'required|max:7|min:2|unique:departments,code',
            'name' => 'required|unique:departments,name',
        ]);
        $db_field = new Department();

        $db_field->code = $request->code;
        $db_field->name = $request->name;
        $db_field->save();
        return back()->with('status', 'Department Save Successfully.');
    }
}
