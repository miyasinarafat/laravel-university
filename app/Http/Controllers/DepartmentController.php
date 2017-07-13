<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    /**
     * index method
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }

    /**
     * create method
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $department['id'] = '';
        return view('departments.create-and-edit', compact('department'));
    }

    /**
     * edit method
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request)
    {
        $department = Department::find($request->id);
        return view('departments.create-and-edit', compact('department'));
    }

    /**
     * store method
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request['name'] = strtolower($request->name);
        if ($request->id) {
            $db_field = Department::find($request->id);
            $this->validate($request, [
                'code' => 'required|max:7|min:2|unique:departments,code,'.$request->id,
                'name' => 'required|unique:departments,name,'.$request->id,
            ]);
        } else {
            $this->validate($request, [
                'code' => 'required|max:7|min:2|unique:departments,code',
                'name' => 'required|unique:departments,name',
            ]);
            $db_field = new Department();
        }
        $db_field->code = $request->code;
        $db_field->name = $request->name;
        if (!$request->id) {
            $db_field->save();
            return back()->with('status', 'Department Save Successfully.');
        } else {
            $db_field->save();
            return back()->with('status', 'Department Update Successfully.');
        }

    }

    /**
     * soft delete method
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Request $request)
    {
        $delete = Department::find($request->id);
        $delete->delete();
        return back()->with('status', 'Department Soft Deleted Successfully');
    }

    /**
     * trash index method
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function trashIndex()
    {
        $trashDepartments = Department::onlyTrashed()->get();
        return view('departments.index', compact('trashDepartments'));
    }

    /**
     * restore method
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(Request $request)
    {
        $restore = Department::onlyTrashed()->find($request->id);
        $restore->restore();
        return back()->with('status', 'Department Restore Successfully');
    }

    /**
     * permanently delete method
     * 
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deletePermanently(Request $request)
    {
        $restore = Department::onlyTrashed()->find($request->id);
        $restore->forceDelete();
        return back()->with('status', 'Department Permanently Deleted Successfully');
    }
}
