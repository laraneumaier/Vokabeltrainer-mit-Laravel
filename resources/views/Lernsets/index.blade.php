@extends('layouts.home')

@section('pcontent')
    <div class="text-center">
        <h1 class="mt-5">Deine Lernsets</h1>
    </div>

    @if($lernsets->isEmpty())   
        <div class="row">
            <div class="<pl-5 ml-5 my-2">
                <p> Du hast leider noch keine Lernsets erstellt.</hp>
            </div> 
        </div>
    <x-createlernset/>
    
    @else 
        @foreach ($lernsets as $lernset)
        <div class="row bg-light mx-5 mt-3 p-2">
            <div class="col ">
                <h2 class="">{{$lernset->name}}</h2> 
                <form action="{{ route('lernsets.destroy',$lernset->id) }}" class="" method="POST">
                @csrf
                @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger float-right mr-2">Lernset löschen</button>                        
                </form>                     
                <a   class="btn btn-outline-primary float-right mr-2" href="{{ route('lernsets.vocabs.index',$lernset->id) }}">Vokabeln einsehen</a>
                <a   class="btn btn-primary  float-right mr-2" href="{{ route('lernsets.practise.index',$lernset->id) }}">Üben</a> 
            </div>
        </div>
        @endforeach  
@endif
@endsection

