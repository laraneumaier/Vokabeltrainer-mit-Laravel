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
        $lernsetts = Lernsett::all()->where('user_id', $user_id);
    
        return view('lernsetts.index',compact('lernsetts'));

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
                return redirect ('login');
            }         
    }
    public function delete(Lernsett $lernsetts){
        $lernsetts->delete();
    }
}
