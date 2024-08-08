<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Book::get();
        return view('book.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('book.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // cara ke 1
        $book = new Book;
        $book->category_id = $request->category_id;
        $book->judul = $request->judul;
        $book->jumlah = $request->jumlah;
        $book->penerbit = $request->penerbit;
        $book->tahun_terbit = $request->tahun_terbit;
        $book->penulis = $request->penulis;
        $book->save();
        // return redirect()->to('book');

        // cara ke 2
        // Book::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);
        return redirect()->to('book');

        // cara ke 3
        // book::create($request->all());
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
        // cara ke 1
        // $edit = book::where('id',$id)->first();
        // cara ke 2
        $edit = book::find($id);
        return view('book.edit', compact('edit'));
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
        // cara ke 1

        Book::where('id', $id)->update([
            'judul' => $request->judul,
            'jumlah' => $request->jumlah,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'penulis' => $request->penulis,
        ]);

        return redirect()->to('book')->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $book = book::find($id)->delete();
        return redirect()->to('book')->with('message', 'data berhasil hapus');
    }
}