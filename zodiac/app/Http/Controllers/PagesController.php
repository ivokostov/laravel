<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages; 

class PagesController extends Controller
{
  
    public function create()
    {
        //show form to create a blog post
    }

   
    public function store(Request $request)
    {
        //store a new post
    }

    public function show(Pages $page)
    {
        $title = $page->title.' | '.config('app.name');
        return view('page', compact('page', 'title'));
    }

    
    public function edit(Pages $page)
    {
        //show form to edit the post
    }

    
    public function update(Request $request, Pages $page)
    {
        //save the edited post
    }

    
    public function destroy(Pages $page)
    {
        //delete a post
    }
}
