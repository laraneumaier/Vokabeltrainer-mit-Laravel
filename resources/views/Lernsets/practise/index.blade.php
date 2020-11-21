@extends('layouts.home')

<!-- Inspieriet von: https://www.itsolutionstuff.com/post/laravel-8-crud-application-tutorial-for-beginnersexample.html  -->
 
@section('pcontent')

<div class="text-center">
    <h1 class="mt-5">Vocabs</h1>
</div>

<div class="mx-5">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    @if($vocabs->isEmpty())
            <p>Du hast noch keine Vokabel erstellt.</p>
    @else 
        <p>Prüfe jetzt deine Vokabelkenntnisse</p>
    
        <table class="table table-bordered table-info">
            <tr>
                <th>Deutsch</th>
                <th>Übersetzung</th>
                </tr>
                @foreach ($vocabs as $vocab)
                <tr>
                    <td>{{ $vocab->german }}</td>
                    <td> 
                        <div class="dtranslation invisible">
                            <p >{{$vocab->translation}}</p>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
            <button id="showbutton" class="btn btn-primary">Lösung anzeigen</button>
            <button id="hidebutton" class="btn btn-primary">Lösung verbergen</button>
            <a class="btn btn-outline-primary float-right" href="{{ route('lernsets.index') }}"> Fertig </a>

            <div class="mt-3">
                {{ $vocabs->links() }}
            </div>
    </div>
    @endif

@endsection

<script type="text/javascript">
     window.onload = function () {
        show();
        hide();
            
    }
   
    function show(){
        let showButton= document.getElementById("showbutton");
        showButton.addEventListener("click", function(){
                    let translation = document.getElementsByClassName("dtranslation");
                    for (var i=0; i < translation.length; i++) {
                            translation[i].classList.remove('invisible');

                        }
        });
    }

    function hide(){
        let hideButton= document.getElementById("hidebutton");
        hideButton.addEventListener("click", function(){
                    let translation = document.getElementsByClassName("dtranslation");
                    for (var i=0; i < translation.length; i++) {
                            translation[i].classList.add('invisible');
                        }
                    });
    }

</script>