<?php

namespace App\Http\Controllers\Api\v1\Books;

use App\Http\Controllers\Controller;
use App\Http\Library\RestFullResponse\ApiResponse;
use App\Models\Book;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BooksController extends Controller
{

    protected $apiResponse;


    /**
     * BooksController constructor.
     * @param ApiResponse $apiResponse
     */
    public function __construct(
        ApiResponse $apiResponse
    )
    {
        $this->apiResponse = $apiResponse;

    }

    /**
     *
     *@group  Book Store
     *
     * Endpoint for geting all Book in the Book Store
     * Seachable by name, country, publisher and realease date
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @apiResourceModel \App\Models\Book
     */
    public function index(Request $request)
    {

        if ($request->all()) {
            $books = Book::where('name', $request->input('name'))->
            orWhere('country', $request->input('country'))->
            orWhere('publisher', $request->input('publisher'))->
            orWhere('release_date', $request->input('release_date'))
            ->get();
            if (is_string($books)) return $this->apiResponse->respondWithError($books);
        } else {

            $books = Book::all();
        }
        return $this->apiResponse->respondWithDataStatusAndCodeOnly(
            $books->toArray(), JsonResponse::HTTP_OK);
    }


    /**
     * @group Book Store
     *
     *  Books Collection
     *
     * Endpoint for storing book in the Book Store
     *
     * @param CreateBookRequest $request
     * @param Book $book
     * @return \Illuminate\Http\JsonResponse
     * @apiResourceModel \App\Models\Book
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'isbn'=>'required',
            'authors'=>'required',
            'number_of_pages'=>'required',
            'publisher'=>'required',
            'country'=>'required',

        ]);

        $createBook = Book::create($request->all());

        if($createBook){
            return $this->apiResponse->respondWithDataStatusAndCodeOnly(
                $createBook, JsonResponse::HTTP_CREATED);

        }


    }


    /**
     * @group Book Store
     *
     *  Books Collection
     *
     * An Endpoint for geting single Book detail in the store
     *
     * @param Book $book
     * @return \Illuminate\Http\JsonResponse
     * @apiResourceModel \App\Models\Book
     */
    public function show(Book $book)
    {
        return $this->apiResponse->respondWithDataStatusAndCodeOnly($book);
    }

    /**
     * An Endpoint for updating the selected book from book store.
     *
     * @param UpdateBookRequest $request
     * @return void
     */
    public function update(Request $request, $id)
    {

        $updatedBook=Book::find($id);
        $updatedBook->update($request->all());

        if (is_string($updatedBook)) return $this->apiResponse->respondWithError($updatedBook);

        return $this->apiResponse->respondWithNoPagination(
            $updatedBook,"Book: $updatedBook->name updated successfully");

    }


    /**
     * An Endpoint to Remove the selected book from book store.
     *
     * @param Book $book
     * @return void
     * @throws \Exception
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return $this->apiResponse->respondDeleted("Book: $book->name was deleted successfully");
    }

}
