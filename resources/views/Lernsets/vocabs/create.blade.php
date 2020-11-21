@extends('layouts.home')
  
@section('pcontent')
<div class="text-center">
   <h1 class="mt-5"> Vokabeln hinzufügen</h1>
</div>

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<form action="{{route('lernsets.vocabs.store', $lernset_id )}}" class="my-3 mx-5" method="POST">
@csrf
  <div class="row my-3">
      <div class="col">
      <label for="german">Deutsch</label>
        <input id="german" type="text" name="german" class="form-control border-bottom" placeholder="Deutsch">
      </div>
      <div class="col">
          <label for="translation">Übersetzung</label>
        <input id="translation" name="translation" type="text" class="form-control border-bottom" placeholder="Übersetzung">
      </div>
  </div>
  <div class="row mt-2 text-block">
    <div class="col btn-block ">
            <a class="btn btn-outline-primary  center-block float-right" href="{{ route('lernsets.index')}}">Fertig</a> 
            <button type="submit" class="btn btn-primary mx-1 float-right">Hinzufügen</button>

    </div>
  </div>
</form>
<div class="row mt-2">
  
</div>
  
@endsection