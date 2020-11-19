@extends('layouts.home')

@section('pcontent')
    <div class="text-center">
    <h1 class="mt-5">Deine Lernsetts:</h1>
    </div>

    @if($lernsetts->isEmpty())   
                <div class="row">
                    <div class="<pl-5 ml-5 mt-2">
                        <p> Du hast leider noch keine Lernsetts erstellt.</hp>
                    </div> 
                </div>
                <x-createlernsett/>
               
            
    @else

  
 
                    @foreach ($lernsetts as $lernsett)
                    <div class="row bg-light mx-5 mt-5 p-4">
                        <div class="col-3 my-auto">
                            <h2 class="card-text">{{$lernsett->name}}</h2>                          
                        </div>
                        <div class="col-3  float-right">
                            <a  id="singlebutton" class="btn btn-primary center-block float-right m-2" href="{{ route('register') }}"> Vokabeln ansehen</a>    
                        </div>   
                        <div class="col-3 float-right">
                            <a  id="singlebutton" class="btn btn-primary  center-block float-right m-2 " href="{{ route('register') }}">Vokabeln bearbeiten</a> 
                        </div>
                        <div class="col-3  float-right">
                        @csrf 
                        @method('DELETE')
                            <a  id="singlebutton" class="btn btn-outline-primary center-block float-right m-2 " href="{{ route('register') }}"> Lernsett löschen</a>                         
                        </div>
                    </div>
                    @endforeach  
    

    @endif

@endsection

