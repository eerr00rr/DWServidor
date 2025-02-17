@extends('layout')
@section('title', 'Nueva Cliente')
@section('stylesheets')
@parent
@endsection
@section('content')
<h1>Edit Cliente</h1>
<a href="{{ route('cliente_list') }}">&laquo; Volver</a>
<div style="color: red;">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
<div style="margin-top: 20px">
    <form method="POST" action="{{ route('cliente_edit', ['id' => $cliente->id]) }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="dni">DNI</label>
            <input type="text" name="dni" value="{{ $cliente->dni }}" />
        </div>
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="{{ $cliente->nombre }}" />
        </div>
        <div>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" value="{{ $cliente->apellidos }}" />
        </div>
        <div>
            <label for="fechaN">Fecha Nacimiento</label>
            <input type="date" name="fechaN" value="{{ $cliente->fechaN->format('Y-m-d') }}" />
        </div>
        @if($cliente->imagen)
        <div>
            <label>Imagen Actual: </label>
            <span><strong>{{ $cliente->imagen }}</strong></span>
            <label for="borrarImagen"> | Borrar Imagen</label>
            <input type="checkbox" name="borrarImagen">
        </div>
        @endif
        <div>
            <label for="imagen">Subir una imagen</label>
            <input type="file" name="imagen" />
        </div>
        <button type="submit">Editar cliente</button>
    </form>
</div>
@endsection