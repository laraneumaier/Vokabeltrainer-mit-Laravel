@extends('layouts.home')

@section('pcontent')
<div class="text-center">
   <h1 class="m-0"> Herzlich Willkommen {{Auth::user()->name}}!</h1>
</div>
<div class="row">
   <div class="col border p-5 m-5">
      <h2>Lernset erstellen</h2>

   </div>
</div>


@endsection
