@extends('layout')
@section('title', 'Listado de clientes')
@section('stylesheets')
@parent
@endsection
@section('content')
<h1>Listado de clientes</h1>
@if (Auth::check())
<a href="{{ route('cliente_new') }}">+ Nueva cliente</a>
@endif
@if (session('status'))
<div>
    <strong>Success!</strong> {{ session('status') }}
</div>
@endif
<table style="margin-top: 20px;margin-bottom: 10px;">
    <thead>
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>FechaN</th>
            <th>Imagen</th>
        </tr>
        </thead->cuentas>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->dni }}</td>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->apellidos }}</td>
            <td>{{ $cliente->fechaN->format('d-m-Y') }}</td>
            <td><img src="{{ asset('uploads/imagenes/' . $cliente->imagen) }}" alt="{{ $cliente->imagen }}" style="height:200px;width:200px;"></td>
            <td>{{ $cliente->contar() }}</td>
            @if (Auth::check())
            <td>
                <a href="{{ route('cliente_delete', ['id' => $cliente->id]) }}">Eliminar</a>
                <br>
                <a href="{{ route('cliente_edit', ['id' => $cliente->id]) }}">Edit</a>
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
<br>
@endsection