@extends('layouts.home')

@section('pcontent')
<div class="text-center">
   <h1 class="m-0"> Herzlich Willkommen {{Auth::user()->name}}!</h1>
</div>


@endsection
