<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;

use App\Models\Category;
use Auth;
use App\Http\Controllers\VocabController;



class CategoryController extends Controller
{
    public function index(){

    }
    public function store(Request $request)
    {
        if (Auth::check())
            {
            $input = $request->all();
            $user_id = Auth::user()->id;
            $input['user_id'] = $user_id;
            Category::create($input);
            return view('vocabs.create');

            
        } else {
                echo "du bist nicht angemeldt";
            }
            
        
    }
}
