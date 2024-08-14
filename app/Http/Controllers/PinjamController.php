<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Category::get();
        return view('pinjam.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('pinjam.create',compact('categories'));
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
        // $Category = new Category;
        // $Category->name = $request->name;
        // $Category->email = $request->email;
        // $Category->password = $request->password;
        // $Category->save();
        // return redirect()->to('category');

        // cara ke 2
        Category::create([
            'category_name' => $request->category_name,
        ]);
        return redirect()->to('category');

        // cara ke 3
        // Category::create($request->all());
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

        // cara ke 2
        $edit = Category::find($id);
        return view('pinjam.edit', compact('edit'));
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

        Category::where('id', $id)->update([
            'pinjam_name' => $request->category_name,
        ]);

        return redirect()->to('pinjam')->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Category = Category::find($id)->delete();
        return redirect()->to('pinjam')->with('message', 'data berhasil hapus');
    }
}