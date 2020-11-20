@extends('layouts.home')

@section('pcontent')

<div class="text-center">
   <h1 class="mt-5">{{$lernset->name}}</h1>
</div>

<form>
  <div class="row my-3 mx-5">
    <div class="col">
    <label for="german">Deutsch</label>
      <input id="german" type="text" class="form-control border-bottom" placeholder="Deutsch">
    </div>
    <div class="col">
        <label for="translation">Übersetzung</label>
      <input id="translation" type="text" class="form-control border-bottom" placeholder="Übersetzung">
    </div>
  </div>
</form>

@endsection