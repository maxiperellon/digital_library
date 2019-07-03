<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\ForHire;
use App\Models\Student;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ForHireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();

        return view('for_hire.show', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('for_hire.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $for_hires = ForHire::create($request->all());
        return redirect()->action('ForHireController@index', compact('for_hires'));
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
        $books = Book::all();



        return view('for_hire.show', compact('student'),compact('books'));
    }

    public function add($bookid,$id)
    {

        $student = Student::findOrFail($id);
        $book = Book::findOrFail($bookid);
        //$books = Book::all();

        return view('for_hire.add',compact('book'),compact('student'));
    }
   /* public function searchByDni(Request $request)
    {
        if ($request->filter === 'Filtro' || $request->search === null){

            return redirect()->route('for_hire.index');
        }*/
        public function searchByFilter(Request $request,$id)
    {

        $student = Student::findOrFail($id);
        $book = Book::findOrFail($bookid);
        if ($request->filter === 'Filtro' || $request->search === null){
            Toastr::warning('Revise los parametros de busqueda', 'Buscar');

            return redirect()->route('for_hire.index');
        }

        $books = Book::where($request->filter, 'like', '$request->search')->paginate(10);
        if ($books->isEmpty()){
            Toastr::info('No se encontraron coincidencias');
            return redirect()->route('for_hire.index');
        }
        return view('for_hire.show', compact('books'),compact('book'),compact('student'));
    }








    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getForHire()
    {
        $students = DB::table('students')->get('id');
        Student::all()->pluck('id');
        $books = DB::table('books')->get('id');

        return view('for_hire.get_for_hire')->with([
            'students' => $students,
            'books' => $books]
        );


    }
}
