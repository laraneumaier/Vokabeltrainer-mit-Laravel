<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;

use App\Models\Lernsett;
use Auth;
use App\Http\Controllers\VocabController;

class LernsettController extends Controller
{
    public function index(){
        $user_id =Auth::user()->id;
        $lernstts = Lernsett::all()->where('user_id', $user_id);
    
        return view('lernsett.index',compact('lernsett'));

    }
    public function store(Request $request)
    {
        if (Auth::check())
            {
            $input = $request->all();
            $user_id = Auth::user()->id;
            $input['user_id'] = $user_id;
            Lernsett::create($input);
            return redirect ('vocabs/create');
            
        } else {
                echo "du bist nicht angemeldt";
            }         
    }
}
