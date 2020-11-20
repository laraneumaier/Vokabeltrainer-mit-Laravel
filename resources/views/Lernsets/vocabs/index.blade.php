@extends('vocabs.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Vocabs</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('lernsets.vocabs.create') }}"> Create New Vocab</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>german</th>
            <th>translation</th>
            <th>category</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($vocabs as $vocab)
        <tr>
            <td>{{ $vocab->german }}</td>
            <td>{{ $vocab->translation }}</td>
            <td>
                <form action="" method="POST">
   
                    <a class="btn btn-info" href="">Show</a>
    
                    <a class="btn btn-primary" href="">Edit</a>
   
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $vocabs->links() !!}
      
@endsection