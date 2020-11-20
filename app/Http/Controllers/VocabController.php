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



    public function store(Request $request)
    {
        $request->validate([
            'german' => 'required',
            'translation' => 'required',
        ]);

        $input = $request->all();
        $vocab = Vocab::create($input);

        return redirect()->route('vocabs.index');
        }
    


}