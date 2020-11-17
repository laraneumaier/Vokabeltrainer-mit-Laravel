@extends ('layouts.main')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3">
      One of three columns
    </div>
    <div class="col-sm-9">
        @yield('pcontent')
    </div>
  </div>
</div>

@endsection
