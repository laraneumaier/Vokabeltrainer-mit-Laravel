@extends('vocabs.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Vocabs</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('vocabs.create') }}"> Create New Vocab</a>
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
            <td>{{ ++$i }}</td>
            <td>{{ $vocab->german }}</td>
            <td>{{ $vocab->translation }}</td>
            <td>{{ $vocab->category }}</td>
            <td>
                <form action="{{ route('vocabs.destroy}}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('vocabs.show',$vocab->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('vocabs.edit',$vocab->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $vocabs->links() !!}
      
@endsection