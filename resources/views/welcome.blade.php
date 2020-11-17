@extends ('layouts.main')

@section('content')
<div class="row">
    <div class="col-sm-6 backgroundcolor-blue">

    </div>
    <div class="col-sm-6 pl-0">
            <img src="{{ asset('/images/start-picture.jpg')}}" class="img-fluid"> 
    </div>
</div>
</div class="row">
    <h3>Mit diesem Vokabeltrainer geht nichts mehr schief!</h3>

    <p>Mittlerweile können wir {{User::all()->count() }} laravel </p>
</div>
@endsection