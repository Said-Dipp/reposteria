@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">cliente {{ $cliente->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/cliente') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/cliente/' . $cliente->id . '/edit') }}" title="Edit cliente"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/cliente' . '/' . $cliente->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete cliente" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $cliente->id }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $cliente->nombre }} </td></tr>
                                    <tr><th> Direccion </th><td> {{ $cliente->direccion }} </td></tr>
                                    <tr><th> Telefono </th><td> {{ $cliente->telefono }} </td></tr>
                                    <tr><th> Celular </th><td> {{ $cliente->celular }} </td></tr>
                                    <tr><th> Nombre </th><td> {{ $cliente->num_aux }} </td></tr>
                                    <tr><th> Email </th><td> {{ $cliente->email }} </td></tr>
                                    <tr><th> Tipo </th><td> {{ $cliente->tipo }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
