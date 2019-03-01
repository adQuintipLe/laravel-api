<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Staff;

class ApiController extends Controller
{
    public function create(Request $request)
    {
        $staff = new Staff();

        $staff->firstName = $request->input('fname');
        $staff->lastName = $request->input('lname');
        $staff->occupation = $request->input('occupation');
        $staff->companyName = $request->input('cname');

        $staff->save();

        return response()->json($staff);
    }

    
    public function show()
    {
        $staff = Staff::all();

        return response()->json($staff);
    }


    public function showById($id)
    {
        $staff = Staff::find($id);

        return response()->json($staff);
    }


    public function updateById(Request $request, $id)
    {
        $staff = Staff::find($id);

        $staff->firstName = $request->input('fname');
        $staff->lastName = $request->input('lname');
        $staff->occupation = $request->input('occupation');
        $staff->companyName = $request->input('cname');

        $staff->save();

        return response()->json($staff);
    }


    public function deleteById($id)
    {
        $staff = Staff::find($id);

        $staff->delete();

        return response()->json($staff);
    }

}
