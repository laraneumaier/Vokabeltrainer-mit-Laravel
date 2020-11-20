<div class="row">
   <div class="col p-5 m-5 bg-light">
      <h2>Lernset erstellen</h2>
      <form action="{{ route('lernsets.store', $lernset_id ?? '')}}" method="POST">
      @csrf
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                  <strong>Name</strong>
                  <input type="text" name="name" class="form-control" placeholder="Name">
               </div>
               @error('name')
                    <strong>{{ $message }}</strong>
                @enderror
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" class="btn btn-primary" >Submit</button>
         </div>
      </div>
   </form>
</div>
</div>

