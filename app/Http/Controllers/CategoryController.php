<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use Auth;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        if (Auth::check())
            {
            $input = $request->all();
            $user_id = Auth::user()->id;
            $input['user_id'] = $user_id;
            Category::create($input);
        
            return redirect()->route('/home');
                
            } else {
                echo "du bist nicht angemeldt";
            }
            
        
    }
}
