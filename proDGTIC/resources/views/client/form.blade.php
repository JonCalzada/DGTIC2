@extends('theme.base')

@section('content')

    <div class="container py-5 text-center">
        <h1 class="">Crear Clientes</h1>
       <form action="{{ route('client.store') }}" method="POST"> 
        @csrf
        <div class="mb=3">
            <label form=name class="form-label"> Nombre </label>
            <input type= "text" name="name" class="from-control" placeholder="Nombre del cliente">
            <p class="from-text">Escriba el nombre del cliente</p>
            @error('name')
                <p class="from-text text-danger">{{$message}}</p>
            @enderror
        </div>


        <div class="mb=3">
            <label form=name class="form-label"> Saldo </label>
            <input type= "text" name="name" class="from-control" placeholder="Saldo del cliente" step="0.01">
                <p class="from-text">Escriba el nombre del cliente</p>
            @error('due')
        
            @enderror
        </div>


        <div class="mb=3">
            <label from="coments" class="form-label">Comentarios</label>
            <textarea name="coments" col="30" rows="4" class="from-control"></textarea>
            <p class="form-text">Escriba algun comentario</p>
            @error('coments')
                <p class="from-text text-danger">{{$message}}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-info">Guardar Cliente</button>
       </form>
        
    </div>
@endsection