@extends('layout')
@section('title', 'Estadisticas')
@section('stylesheets')
@parent
@endsection
@section('content')
<h1>Estadisticas</h1>
<div style="margin-top: 20px">
    <div>
        <h2>Cuenta con saldo maximo</h2>
        <table>
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Saldo</th>
                    <th>Cliente</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $max->codigo }}</td>
                    <td>{{ $max->saldo }}</td>
                    <td>
                        @isset($max->cliente)
                        {{ $max->cliente->getNombreApellidos() }}
                        @endisset
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <h2>Cuenta con saldo minimo</h2>
        <table>
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Saldo</th>
                    <th>Cliente</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $min->codigo }}</td>
                    <td>{{ $min->saldo }}</td>
                    <td>
                        @isset($min->cliente)
                        {{ $min->cliente->getNombreApellidos() }}
                        @endisset
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <h2>Total cuentas</h2>
        <table>
            <thead>
                <tr>
                    <th>Saldo Promedio</th>
                    <th>Cantidad Cuentas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $avg }}</td>
                    <td>{{ $cuentas->count() }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection