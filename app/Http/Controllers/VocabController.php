<?php
  
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
    public function index(){
        echo "hallo";
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
        return redirect()->route('lernsets.vocabs.create', $lernset_id);
        }
}