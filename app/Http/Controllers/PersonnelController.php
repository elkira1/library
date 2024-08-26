<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $staffs = Personnel::all();
        return view('personnel.index', compact('staffs'));

    }

    public function userindex()
    {

        $staffs = Personnel::all();
        return view('personnel.userindex', compact('staffs'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $staffs = Personnel::all();
        return view('personnel.create', compact('staffs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'FirstName',
            'LastName',
            'Gender',
            'BirthDate',
            'Phone',
            'Address',
            'Position',
        ]);

        Personnel::create($request->all());

        return redirect()->route('personnel.index')
                        ->with('success','New Staff Added successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $staff = Personnel::find($id);

        return view('personnel.show',compact('personnel'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $staff = Personnel::find($id);
        return view('personnel.edit',compact('staff'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'FirstName',
            'LastName',
            'Gender',
            'BirthDate',
            'Phone',
            'Address',
            'Postion',
        ]);

        $staff = Personnel::find($id);
        $staff->update($request->all());

        return redirect()->route('personnel.index')
                        ->with('success','Staff information updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $staff = Personnel::find($id);
        $staff->delete();

        return redirect()->route('personnel.index')
            ->with('success', 'Staff deleted successfully');

    }
}
