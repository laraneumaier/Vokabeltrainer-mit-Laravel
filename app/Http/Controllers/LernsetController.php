<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;

use App\Models\Lernset;
use Auth;
use App\Http\Controllers\VocabController;

class LernsetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('throttle:1000,1');

    }
    
    public function index(){
        $user_id =Auth::user()->id;
        $lernsets = Lernset::all()->where('user_id', $user_id);
    
        return view('lernsets.index',compact('lernsets'));
    }

    public function store(Request $request, Lernset $lernset)
    {
        $request->validate([
            'name' => 'required',
        ]);

        if (Auth::check())
            {
            $input = $request->all();
            $user_id = Auth::user()->id;
            $input['user_id'] = $user_id;
            $lernset = Lernset::create($input);
            
            return view('vocabs.create',compact('lernset'));


        } else {
                return redirect ('login');
            }         
    }
    public function destroy(Lernset $lernset)
    {
        $lernset->delete();
    
        return redirect()->route('lernsets.index')
                        ->with('success','Vocab deleted successfully');
    }
    public function show(Lernset $lernset)
    {
        return view('lernsets.show',compact('lernset'));
    } 
    
}
