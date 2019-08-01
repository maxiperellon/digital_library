<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\ForHire;
use App\Models\Student;
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
        $books = Book::all();
        $for_hires = ForHire::all();

        return view('for_hire.index', compact('students'), compact('for_hires'),  compact('books'));
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
    public function store($id,$bookid)
    {

        $for_hire = new ForHire();
        $for_hire->id_books = $bookid;
        $for_hire->id_students = $id;
        $for_hire->id_users = 4;
        $books=Book::findOrFail($bookid);
        $books->setAttribute('condition','0');
        $books->save();
        $for_hire->save();

        return redirect()->action('ForHireController@index' , compact('for_hire'));
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

        return view('for_hire.add' ,compact('student'), compact('book'));
    }

    public function searchByFilter(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $books = Book::where('isbn', 'like', '%'.$request->search.'%')->get();
        if ($request->filter === 'Filtro' || $request->search === null)
        {
            return redirect()->route('for_hire.show', compact('student'));
        }
        return view('for_hire.show', compact('books'), compact('student'));
    }

    public function searchForHire(Request $request)
    {
        if ($request->filter === 'Filtro' || $request->search === null)
        {
            return redirect()->route('for_hire.index');
        }

        $for_hires = ForHire::whereHas('student', function ($query) use ($request) {
            $query->where('dni', 'like', '%'.$request->search.'%');
            /*aqui estamos consultanto la tabla student por el campo name*/

        })->get();

        return view('for_hire.index', compact('for_hires'));

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
    public function destroy($id,$bookid)
    {
        ForHire::findOrFail($id) -> delete($id);
        $books=Book::findOrFail($bookid);
        $books->setAttribute('condition','1');
        $books->save();
        return redirect()->action('ForHireController@index');
    }

}
