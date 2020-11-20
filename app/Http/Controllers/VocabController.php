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
            'german' => 'required',
            'translation' => 'required',
        ]);
    
    }
}