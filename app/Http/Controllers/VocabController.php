<?php
  
namespace App\Http\Controllers;
   
use App\Models\Vocab;
use Illuminate\Http\Request;
  
class VocabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vocabs = Vocab::latest()->paginate(5);
    
        return view('vocabs.index',compact('vocabs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vocabs.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'german' => 'required',
            'translation' => 'required',
            'category' => 'required',
        ]);
    
        Vocab::create($request->all());
     
        return redirect()->route('vocabs.index')
                        ->with('success','Vocab created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Vocab  $vocab
     * @return \Illuminate\Http\Response
     */
    public function show(Vocab $vocab)
    {
        return view('vocabs.show',compact('vocab'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vocab  $vocab
     * @return \Illuminate\Http\Response
     */
    public function edit(Vocab $vocab)
    {
        return view('vocabs.edit',compact('vocab'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vocab  $vocab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vocab $vocab)
    {
        $request->validate([
            'german' => 'required',
            'translation' => 'required',
            'category' => 'required',
        ]);
    
        $vocab->update($request->all());
    
        return redirect()->route('vocabs.index')
                        ->with('success','Vocab updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vocab  $vocab
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vocab $vocab)
    {
        $vocab->delete();
    
        return redirect()->route('vocabs.index')
                        ->with('success','Vocab deleted successfully');
    }
}