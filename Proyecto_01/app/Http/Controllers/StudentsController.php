<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Students::simplePaginate(2);
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Students;

        $student->Nombre = $request->Nombre;

        $student->N°_Tarjeta = $request->N°_Tarjeta;

        $student->Celular = $request->Celular;

        $student->Correo = $request->Correo;

        $student->save();

        return redirect()->route('students.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Students  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Students $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Students  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $student)
    {
        return view('Students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Students  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Students $student)
    {
        $student->Nombre = $request->Nombre;

        $student->N°_Tarjeta = $request->N°_Tarjeta;

        $student->Celular = $request->Celular;

        $student->Correo = $request->Correo;

        $student->save();

        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Students  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Students $student)
    {
        //
    }
}
