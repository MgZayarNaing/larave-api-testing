<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateBlogRequest;

class BlogController extends Controller
{
    // crud function
    // [index -get all lists,]
    // show - get blog detail (  blog/1)
    // update - update Blog detail (blog/1)
    // store - create contact
    // destroy - delete date (blog/1)

    public function store(CreateBlogRequest $request)
    {
        $payload = collect($request->validated()) ;

        //
    }

    public function index()
    {

    }

    public function show()
    {

    }

    public function update(Request $request, $id )
    {

    }

    public function destroy()
    {

    }
}
