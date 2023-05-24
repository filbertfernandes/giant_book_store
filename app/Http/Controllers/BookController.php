<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $categories = Category::all();
        $books = Book::all();

        return view('index', [
            'books' => $books,
            'categories' => $categories
        ]);
    }

    public function category() {
        $categories = Category::all();
        $category = Category::find(request('id'));

        $bookIds = BookCategory::where('category_id', request('id'))->pluck('book_id');
        $books = Book::whereIn('id', $bookIds)->get(); 
        
        return view('category', [
            'books' => $books,
            'category' => $category,
            'categories' => $categories
        ]);
    }

    public function detail(Book $book) {
        $categories = Category::all();

        return view('detail', [
            'book' => $book,
            'categories' => $categories
        ]);
    }

    public function publishers() {
        $categories = Category::all();
        $publishers = Publisher::all();

        return view('publishers', [
            'publishers' => $publishers,
            'categories' => $categories
        ]);
    }

    public function publisher(Publisher $publisher) {
        $categories = Category::all();
        $books = Book::where('publisher_id', $publisher->id)->get();
        
        return view('publisher', [
            'publisher' => $publisher,
            'books' => $books,
            'categories' => $categories
        ]);
    }
    
    public function contact() {
        $categories = Category::all();
        
        return view('contact', [
            'categories' => $categories
        ]);
    }
}
