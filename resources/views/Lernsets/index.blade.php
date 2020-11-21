@extends('layouts.home')

@section('pcontent')
    <div class="text-center">
    <h1 class="mt-5">Deine Lernsets:</h1>
    </div>

    @if($lernsets->isEmpty())   
                <div class="row">
                    <div class="<pl-5 ml-5 mt-2">
                        <p> Du hast leider noch keine Lernsets erstellt.</hp>
                    </div> 
                </div>
                <x-createlernset/>
               
            
    @else 
                    @foreach ($lernsets as $lernset)
                    <div class="row bg-light mx-5 mt-5 p-2">
                        <div class="col-sm-3 my-auto">
                            <h2 class="card-text">{{$lernset->name}}</h2>                          
                        </div>
                        <div class="col justify-content-end">
                            <a   class="btn btn-primary  center-block m-3 " href="{{ route('lernsets.practise.index',$lernset->id) }}">Üben</a> 
                        </div>
                        <div class="col justify-content-end">
                            <a   class="btn btn-primary  center-block m-3 " href="{{ route('lernsets.vocabs.index',$lernset->id) }}">Vokabeln einsehen</a> 
                        </div>
                        <form action="{{ route('lernsets.destroy',$lernset->id) }}" class="" method="POST">
                            <div class="col justify-content-end ">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger center-block  m-2 ">Lernset löschen</button>                        
                            </div>
                        </form>
                    </div>
                    @endforeach  
    

    @endif

@endsection

