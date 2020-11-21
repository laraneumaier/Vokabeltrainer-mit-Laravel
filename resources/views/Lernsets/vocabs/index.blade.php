@extends('layouts.home')
 
@section('pcontent')
    <div class="text-center">
        <h1 class="mt-5">Deine Lernsets:</h1>
    </div>
    <div class="mx-5">
        <a class="btn btn-success my-2" href="{{ route('lernsets.vocabs.create', $lernset_id) }}"> Create New Vocab</a>
   
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    
        <table class="table table-bordered">
            <tr>
                <th>Deutsch</th>
                <th>Übersetzung</th>
                <th>Handlung</th>
                </tr>
                @foreach ($vocabs as $vocab)
                <form action="{{ route('lernsets.vocabs.destroy', [$vocab->lernset_id, $vocab->id] )}}" class="" method="POST">
                    <tr>
                        <td>{{ $vocab->german }}</td>
                        <td>{{ $vocab->translation }}</td>
                        <td>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger float-right mr-2">Delete</button>
                            <a class="btn btn-outline-primary float-right mr-2" href="{{route('lernsets.vocabs.edit', [$vocab->lernset_id, $vocab->id])}}">Edit</a>                                
                        </td>
                    </tr>
                </form>
            @endforeach
        </table>

        <a class="btn btn-primary float-right" href="{{ route('lernsets.index') }}"> Zurück zur Übersicht</a>
        
        {{ $vocabs->links() }}
    </div>

      
@endsection