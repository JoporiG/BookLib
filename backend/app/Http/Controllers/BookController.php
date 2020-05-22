<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Route::post('/book/add', 'BookController@add');
//Route::get('/book/all', 'BookController@all');
//Route::get('/book/delete/{id}', 'BookController@delete');
//Route::get('/book/change_availabilty/{id}', 'BookController@changeAvailabilty');
use \App\Book;

class BookController extends Controller
{
    public function add(Request $request){
        $title = $request->title;
        $author = $request->author;
        $book = new Book;
        $book->title = $title;
        $book->author = $author;
        $book->availability = false;
        $book->save();
        return $book;
    }
    public function all(Request $request){
        return Book::all();
    }
    public function delete($id){
        echo($id);
        $book = Book::findOrFail($id);
        $book->delete();
        return true;
    }
    public function changeAvailabilty($id){
        $book = Book::findOrFail($id);
        $book->availability = !$book->availability;
        $book->save();
    }
}
