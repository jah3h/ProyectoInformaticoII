<div class="card shadow" style="margin-top: 10px" wire:poll.200ms>

    <div class="card-body">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <!--<th scope="col">Unidad de Medida</th>-->
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Total</th>
            <th scope="col" class="text-center">Estado</th>
            <th scope="col">Opciones</th>
          </tr>
        <tbody>
          @foreach ($productos as $index=>$prod)
          <tr>
            <th class="align-middle" scope="row">{{$loop->index+1}}</th>
            <td class="align-middle">{{$prod->nombre}}</td>
            <!--<td class="align-middle">{{$prod->unidad_medida_cod}}</td>-->
            <td class="align-middle">{{$prod->cantidad}}</td>
            <td class="align-middle">{{$prod->precio}}</td>
            <td class="align-middle">{{$prod->precio*$prod->cantidad}}</td>
            <td  class="align-middle text-center">
              <div class="custom-control custom-checkbox d-flex justify-content-center">
                <input wire:key="{{$prod->id}}" type="checkbox" value="{{$prod->estado}}" class="custom-control-input" {{$prod->estado?'checked':''}} 
                wire:click="save({{ $prod->id }}, {{ $prod->estado==1?0:1 }})"
                  id="{{'check'.$prod->nombre}}">
                <label class="custom-control-label" for="{{'check'.$prod->nombre}}"></label>
              </div>
            </td>
            <td  class="align-middle text-center">
            
              <form action="{{route('productos.destroy',$prod)}}" method="POST">
                <span class="material-icons"><a href="{{route('productos.edit',$prod)}}">edit</a> </span>
                @csrf
                @method('DELETE')
                 <button type="submit" class="btn btn-link"><span class="material-icons">clear</span></button>
              </form>
  
            </td>
          </tr>
          @endforeach
        </tbody>
  
      </table>
  
      {{$productos->links()}}
    </div>
  </div>