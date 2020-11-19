@extends ('layouts.main')

@section('content')
<div class="row bg-light">
    <div class="col-sm-6 my-auto">
        <div class="row mx-auto">
            <div class="col d-flex justify-content-center my-auto"> 
                <h1 class="text-primary">Lerne jetzt deine  <br>  Vokabeln online!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col text-center mt-5">
                <a  id="singlebutton" class="btn btn-outline-primary p-3 px-4 center-block btn-lg" href="{{ route('register') }}"> Jetzt loslegen </a>
            </div> 
        </div>
    </div>
    <div class="col-sm-6 pl-0">
            <img src="{{ asset('/images/start-picture.jpg')}}" class="img-fluid"> 
    </div>
</div>
</div class="row mx-auto">
    <div class="col my-sm-4  d-flex justify-content-center ">
         <h3 class="py-3">Mit diesem Vokabeltrainer geht nichts mehr schief!</h3>
    </div>
</div>
@endsection