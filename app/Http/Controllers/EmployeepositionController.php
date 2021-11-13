<?php

namespace App\Http\Controllers;

use App\Models\Employeeposition;
use Illuminate\Http\Request;

/**
 * Class EmployeepositionController
 * @package App\Http\Controllers
 */
class EmployeepositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeepositions = Employeeposition::paginate();

        return view('employeeposition.index', compact('employeepositions'))
            ->with('i', (request()->input('page', 1) - 1) * $employeepositions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employeeposition = new Employeeposition();
        return view('employeeposition.create', compact('employeeposition'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Employeeposition::$rules);

        $employeeposition = Employeeposition::create($request->all());

        return redirect()->route('employeepositions.index')
            ->with('success', 'Employeeposition created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employeeposition = Employeeposition::find($id);

        return view('employeeposition.show', compact('employeeposition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employeeposition = Employeeposition::find($id);

        return view('employeeposition.edit', compact('employeeposition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Employeeposition $employeeposition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employeeposition $employeeposition)
    {
        request()->validate(Employeeposition::$rules);

        $employeeposition->update($request->all());

        return redirect()->route('employeepositions.index')
            ->with('success', 'Employeeposition updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $employeeposition = Employeeposition::find($id)->delete();

        return redirect()->route('employeepositions.index')
            ->with('success', 'Employeeposition deleted successfully');
    }
}
