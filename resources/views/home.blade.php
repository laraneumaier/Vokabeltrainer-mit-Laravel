@extends('layouts.home')

@section('pcontent')
<div class="text-center">
   <h1 class="mt-5"> Herzlich Willkommen {{Auth::user()->name}}!</h1>
</div>

<x-createlernset/>


@endsection
