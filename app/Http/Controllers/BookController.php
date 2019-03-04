<?php

namespace App\Http\Controllers;

use App\Book;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Intervention\Validation\Validator;

class BookController extends Controller
{
    public function __construct(Book $book)
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
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     *@param Request $request
     *@return RedirectResponse
     */
    public function searchByFilter(Request $request)
    {
        if ($request->filter === 'Filtro' || $request->search === null){
            Toastr::warning('Revise los parametros de busqueda', 'Buscar');

            return redirect()->route('books.index');
        }

        $books = Book::where($request->filter, 'like', '%' . $request->search . '%')->paginate(10);
        if ($books->isEmpty()){
            Toastr::info('No se encontraron coincidencias');
            return redirect()->route('books.index');
        }

        return view('books.index', compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $books = Book::create($request->all()); //Eloquent

        return redirect()->action('BookController@index', compact('books'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        return view('books.edit', compact('book'));
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
        $book = Book::find($id);
        $book -> update($request->all()); //Eloquent

        return redirect()->action('BookController@index', compact('book'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::destroy($id);
        return redirect()->action('BookController@index', compact('book'));
    }
}
