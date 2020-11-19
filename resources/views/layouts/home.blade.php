@extends ('layouts.main')

@section('content')

<div class="container-fluid">
  <div class="row">
      <nav class="col-md-2 pl-0 d-none d-md-block bg-blue sidebar shadow-lg bg-white min-vh-100 ">
        <div class="sidebar-sticky mt-3">
          <ul class="nav flex-column p-3">
            <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Home</a> </li>
            <li class="nav-item pt-4"><a class="nav-link" href="{{ route('lernsetts.index') }}">Lernsetts</a> </li>
            <li class="nav-item pt-4"><a class="nav-link" href="{{ route('login') }}">Üben</a> </li>
          </ul>  
        </div> 
      </nav>      
      <div class="col-sm-10 mt-3">
        @yield('pcontent')
      </div>
  </div>
</div>

@endsection
