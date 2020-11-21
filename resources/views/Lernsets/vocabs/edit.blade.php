@extends('layouts.main')
   
@section('content')
<div class="text-center">
        <h1 class="mt-5">Voksabel bearbeiten</h1>
    </div>
    <div class="mx-5">   
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('lernsets.vocabs.update', [$vocab->lernset_id, $vocab->id]) }}" method="Post">
            @csrf
            @method('PUT')
    
            <div class="row mx-5">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>german:</strong>
                        <input type="text" name="german" value="{{ $vocab->german }}" class="form-control" placeholder="german">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>translation:</strong>
                        <textarea class="form-control" style="height:150px" name="translation" placeholder="translation">{{ $vocab->translation }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="btn btn-outline-primary float-right" href="{{route('lernsets.vocabs.index', $vocab->lernset_id)}}">Änderung verwerfen</a>
                <button type="submit" class="btn btn-primary">Ändern</button>
                </div>
            </div>
    
        </form>
    </div>
@endsection