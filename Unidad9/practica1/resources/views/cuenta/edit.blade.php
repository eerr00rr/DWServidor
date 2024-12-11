@extends('layout')
@section('title', 'Nueva Cuenta')
@section('stylesheets')
@parent
@endsection
@section('content')
<h1>Edit Cuenta</h1>
<a href="{{ route('cuenta_list') }}">&laquo; Volver</a>
<div style="margin-top: 20px">
    <form method="POST" action="{{ route('cuenta_edit', ['id' => $cuenta->id]) }}">
        @csrf
        <div>
            <label for="codigo">Código</label>
            <input type="text" name="codigo" value="{{ $cuenta->codigo }}" />
        </div>
        <div>
            <label for="saldo">Saldo</label>
            <input type="number" name="saldo" value="{{ $cuenta->saldo }}" />
        </div>
        <div>
            <label for="cliente_id">Cliente</label>
            <select name="cliente_id">
                @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}" @selected(old('cliente_id')==$cliente)>
                    {{ $cliente->nombre }}{{ $cliente->apellidos }}
                </option>
                @endforeach
            </select>
        </div>
        <button type="submit">Crear Cuenta</button>
    </form>
</div>
@endsection