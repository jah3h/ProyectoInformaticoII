@extends('layouts.plantilla')

@section('content')




<div class="card" style="margin-top: 30px">
  
  <div class="card-body">
    <!--<div class="form-row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
      </div>
    </div>-->
    <div class="form-row align-items-center">
    
      <div class="col-auto">
        <label class="sr-only" for="inlineFormInputGroup">List Name</label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text">Nombre de Lista</div>
          </div>
          <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="List Name">
        </div>
      </div>
    
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-2">Agregar</button>
      </div>

    </div>
    <table class="table table-bordered table-sm">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Opciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope=>TOTTUS</th>
          <td><span class="material-icons"> edit</span> <span class="material-icons">clear</span></td>
        </tr>
        <tr>
          <th scope=>Plaza Vea</th>
          <td><span class="material-icons">edit</span> <span class="material-icons">clear</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

@endsection