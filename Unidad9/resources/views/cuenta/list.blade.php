@extends('layout')
@section('title', 'Listado de cuentas')
@section('stylesheets')
@parent
@endsection
@section('content')
<h1>Listado de cuentas</h1>
@if (isset($filtro))
<div>
    <i>Filtrado por codigo <b>{{ $filtro }}</b></i>
    <br><br>
    <i>Saldo minimo <b>{{ $saldo }}</b></i>
    <br><br>
    <a href="{{ route('cuenta_list') }}">Limpiar</a>
</div>
@endif
<br>
@if (Auth::check())
<a href="{{ route('cuenta_new') }}">+ Nueva cuenta</a>
@endif
@if (session('status'))
<div>
    <strong>Success!</strong> {{ session('status') }}
</div>
@endif
<table style="margin-top: 20px;margin-bottom: 10px;">
    <thead>
        <tr>
            <th>Código</th>
            <th>Saldo</th>
            <th>Cliente</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cuentas as $cuenta)
        <tr>
            <td>{{ $cuenta->codigo }}</td>
            <td>{{ $cuenta->saldo }}</td>
            @isset($cuenta->cliente)
            <td>{{ $cuenta->cliente->getNombreApellidos() }}</td>
            @else
            <td></td>
            @endisset
            @if (Auth::check())
            <td>
                <a href="{{ route('cuenta_delete', ['id' => $cuenta->id]) }}">Eliminar</a>
                <br>
                <a href="{{ route('cuenta_edit', ['id' => $cuenta->id]) }}">Edit</a>
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
<br>
<form method="get" action="{{ route('cuenta_filtro') }}">
    <label for="filter">Busca por <b>codigo:</b></label>
    <input type="text" name="filtro" required>
    <br>
    <label for="filter"><b>Saldo</b> minimo:</label>
    <input type="number" name="saldo">
    <br>
    <input type="submit" name="submit" value="Filtro AND">
    <input type="submit" name="submit" value="Filtro OR">
</form>
@endsection