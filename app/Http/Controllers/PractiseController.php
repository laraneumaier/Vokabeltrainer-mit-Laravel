<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vocab;
use App\Http\Controllers\Redirect;
use App\Models\Lernset;
use Illuminate\Support\Facades\DB;


class PractiseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($lernset_id){
        $vocabs =  Vocab::where('lernset_id', $lernset_id)->paginate(1); 
        return view('lernsets.practise.index', compact('vocabs', 'lernset_id'));
    }

}

