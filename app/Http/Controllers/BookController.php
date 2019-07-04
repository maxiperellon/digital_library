<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest\BookRequest;
use App\Http\Requests\BookRequest\UpdateBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
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
    public function store(UpdateBookRequest $request)
    {
        $book = new Book();
//        $books = Book::create($request->all());
//        return redirect()->action('BookController@index', compact('books'));
        $book->isbn = $request->isbn;
        $book->name = $request->name;
        $book->publisher = $request->publisher;
        $book->author = $request->author;
        $book->category = $request->category;
        $book->condition = $request->condition;

        $book->save();

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
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookRequest $request, $id)
    {
        $book = Book::findOrFail($id) -> update($request->all());
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
        Book::findOrFail($id) -> delete($id);
        return redirect()->action('BookController@index');
    }

}
