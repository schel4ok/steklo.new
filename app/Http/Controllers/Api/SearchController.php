<?php

namespace App\Http\Controllers\Api;

use App\Furnitura;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * Search the Furnitura table.
     *
     * @param  Request $request
     * @return mixed
     */
    public function search(Request $request)
    {
        // First we define the error message we are going to show if no keywords
        // existed or if no results found.
        $error = ['error' => 'Ничего не нашлось. Попробуй ещё разок!'];

        // Making sure the user entered a keyword.
        if($request->has('q')) {

            // Using the Laravel Scout syntax to search the products table.
            $posts = Furnitura::search($request->get('q'))->get();

            // If there are results return them, if none, return the error message.
            return $posts->count() ? $posts : $error;

        }

        // Return the error message if no keywords existed
        return $error;
    }
}
