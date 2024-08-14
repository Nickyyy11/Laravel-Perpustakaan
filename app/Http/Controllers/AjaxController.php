<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class AjaxController extends Controller
{
    public function getDataBuku($Category_id)
    {
        $books = Book::where('category_id' , $Category_id)->get();
        return response()->json(['data'=>$books, 'message' => 'Fetch Success!!']);
    }
}