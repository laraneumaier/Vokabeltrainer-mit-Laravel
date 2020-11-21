<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vocab;
use App\Http\Controllers\Redirect;
use App\Models\Lernset;

class PractiseController extends Controller
{
    public function index($lernset_id){
        $vocabs =  Vocab::all()->where('lernset_id', $lernset_id); // lernset or Vocab
        return view('lernsets.practise.index', compact('vocabs', 'lernset_id'));
    }

}

