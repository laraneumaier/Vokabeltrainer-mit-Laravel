<div class="row">
   <div class="col p-5 m-5 bg-light">
      <h2>Lernset erstellen</h2>
      <form action="{{ route('lernsetts.store') }}" method="POST">
      @csrf
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                  <strong>Name</strong>
                  <input type="text" name="name" class="form-control" placeholder="Name">
               </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
         </div>
      </div>
   </form>
</div>
</div>