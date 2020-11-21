@extends('layouts.home')
 
@section('pcontent')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 id="hallohallo" >Vocabs</h1>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered mx-5">
        <tr>
            <th>Deutsch</th>
            <th>Übersetzung</th>
            </tr>
            @foreach ($vocabs as $vocab)
            <tr>
                <td>{{ $vocab->german }}</td>
                <td> 
                    <div class="translation invisible">
                        <p >{{$vocab->translation}}</p>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
        <button id="showbutton" class="btn btn-primary">Show</button>
        <a class="btn btn-primary" href="{{ route('lernsets.index') }}"> Fertig </a>

@endsection

