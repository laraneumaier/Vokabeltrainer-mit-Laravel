@extends('layouts.home')

<!-- Inspieriet von: https://www.itsolutionstuff.com/post/laravel-8-crud-application-tutorial-for-beginnersexample.html  -->
 
@section('pcontent')
    <div class="text-center">
        <h1 class="mt-5">Deine Vokabeln</h1>
    </div>
    <div class="mx-5">
        <a class="btn btn-success my-2" href="{{ route('lernsets.vocabs.create', $lernset_id) }}">Neue Vokabel erstellen</a>
    
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        @if($vocabs->isEmpty())
            <p>Du hast noch keine Vokabel erstellt.</p>
        @else 
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
                                <button type="submit" class="btn btn-outline-danger float-right mr-2">Löschen</button>
                                <a class="btn btn-outline-primary float-right mr-2" href="{{route('lernsets.vocabs.edit', [$vocab->lernset_id, $vocab->id])}}">Bearbeiten</a>                                
                            </td>
                        </tr>
                    </form>
                @endforeach
            </table>
            <a class="btn btn-primary float-right" href="{{ route('lernsets.index') }}"> Zurück zur Übersicht</a>
            {{ $vocabs->links() }}
        @endif
    </div>

      
@endsection