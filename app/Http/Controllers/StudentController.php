<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
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

    public function searchByFilter(Request $request)
    {
        if ($request->filter === 'Filtro' || $request->search === null){
           /* Toastr::warning('Revise los parametros de busqueda', 'Buscar');*/

            return redirect()->route('students.index');
        }

        $students = Student::where($request->filter, 'like', '%' . $request->search . '%')->paginate(10);
        if ($students->isEmpty()){
           /* Toastr::info('No se encontraron coincidencias');*/
            return redirect()->route('students.index');
        }

        return view('students.index', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $students = Student::create($request->all()); //Eloquent

        return redirect()->action('StudentController@index', compact('students'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, $id)
    {
        $student = Student::findOrFail($id);
        $student -> update($request->all()); //Eloquent

        return redirect()->action('StudentController@index', compact('student'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id) -> delete($id);
        return redirect()->action('StudentController@index');
    }
}
