@extends('layouts.home')
 
@section('pcontent')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Vocabs</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('lernsets.vocabs.create', $lernset_id) }}"> Create New Vocab</a>
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
            <th>Handlung</th>
            </tr>
            @foreach ($vocabs as $vocab)
            <tr>
                <td>{{ $vocab->german }}</td>
                <td>{{ $vocab->translation }}</td>
                <td>
                      <a class="btn btn-primary" href="{{route('lernsets.vocabs.edit', [$vocab->lernset_id, $vocab->id])}}">Edit</a>
                    <form action="{{ route('lernsets.vocabs.destroy', [$vocab->lernset_id, $vocab->id] )}}" class="" method="POST">
    
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <a class="btn btn-primary" href="{{ route('lernsets.index') }}"> Zurück zur Übersicht</a>
  
      
@endsection