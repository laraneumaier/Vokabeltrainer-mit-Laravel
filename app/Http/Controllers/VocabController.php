<?php

// https://laraveldaily.com/nested-resource-controllers-and-routes-laravel-crud-example/
  
namespace App\Http\Controllers;
   
use App\Models\Vocab;
use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;
use App\Models\Lernset;

  
class VocabController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('throttle:1000,1');

    }
   
    public function index($lernset_id){
        $vocabs =  Vocab::all()->where('lernset_id', $lernset_id); // lernset or Vocab
        return view('lernsets.vocabs.index', compact('vocabs', 'lernset_id'));
    }

    public function create($lernset_id)
    {
        return view('lernsets.vocabs.create', compact('lernset_id'));
    }

    public function store($lernset_id, Request $request)
    {
        $request->validate([
            'german' => 'required',
            'translation' => 'required',
        ]);
        Vocab::create($request->all() + ['lernset_id' => $lernset_id]);
        return redirect()->route('lernsets.vocabs.create', $lernset_id)->with('success','Vocab wurde erstellt.'); 
    }

    public function destroy($lernset_id, Vocab $vocab)
    {
        $vocab->delete();
        return redirect()->route('lernsets.vocabs.index',  $lernset_id)->with('success','Die Vokabel wurde gelöscht');
                        
    }
    public function edit($lernset_id, vocab $vocab)
    {
        return view('lernsets.vocabs.edit', compact('lernset_id', 'vocab'));
    }

    public function update($lernset_id, Request $request, Vocab $vocab)
    {
        $vocab->update($request->all());
        return redirect()->route('lernsets.vocabs.index', $lernset_id);
    }

}