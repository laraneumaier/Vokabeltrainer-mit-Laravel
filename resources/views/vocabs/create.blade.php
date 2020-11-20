@extends('layouts.home')
  
@section('pcontent')
<h1>  Vokabeln hinzufügen </h2>

<form action="{{route('vocabs.store')}}" method="POST">
@csrf
  <div class="row my-3 mx-5">
    <div class="col">
    <label for="german">Deutsch</label>
      <input id="german" type="text" name="german" class="form-control border-bottom" placeholder="Deutsch">
    </div>
    <div class="col">
        <label for="translation">Übersetzung</label>
      <input id="translation" name="translation" type="text" class="form-control border-bottom" placeholder="Übersetzung">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  
@endsection