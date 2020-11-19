<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;

use App\Models\Lernsett;
use Auth;
use App\Http\Controllers\VocabController;

class LernsettController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('throttle:1000,1');

    }
    
    public function index(){
        $user_id =Auth::user()->id;
        $lernsetts = Lernsett::all()->where('user_id', $user_id);
    
        return view('lernsetts.index',compact('lernsetts'));

    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        if (Auth::check())
            {
            $input = $request->all();
            $user_id = Auth::user()->id;
            $input['user_id'] = $user_id;
            Lernsett::create($input);
            return redirect ('vocabs/create')->with('success','Du hast dein Lernsett erfolgreich erstellt.');
            
        } else {
                return redirect ('login');
            }         
    }
    public function destroy(Lernsett $lernsett)
    {
        $lernsett->delete();
    
        return redirect()->route('lernsetts.index')
                        ->with('success','Vocab deleted successfully');
    }
    
}
