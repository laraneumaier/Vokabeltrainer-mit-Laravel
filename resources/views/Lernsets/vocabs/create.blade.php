@extends('layouts.home')
  
@section('pcontent')
<h1>  Vokabeln hinzufügen </h2>

<form action="{{route('lernsets.vocabs.store', $lernset_id )}}" method="POST">
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
  </div>
  <div class="row mt-2">
    <div class="col btn-block text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<div class="row mt-2">
  <div class="col btn-block text-center"> 
    <a class="btn btn-primary  center-block m-2" href="{{ route('lernsets.index')}}">Fertig</a> 
  </div>
</div>
  
@endsection