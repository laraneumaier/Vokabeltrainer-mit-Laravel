<?php
  
namespace App\Http\Controllers;
   
use App\Models\Vocab;
use Illuminate\Http\Request;
  
class VocabController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('throttle:1000,1');

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
            Lernset::create($input);
            return redirect ('vocabs/create')->with('success','Du hast dein Lernset erfolgreich erstellt.');
            
        } else {
                return redirect ('login');
            }         
    }
}