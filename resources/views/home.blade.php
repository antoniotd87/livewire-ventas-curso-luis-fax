@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between">
        <h4 class="card-title"><b>Component Title </b> | Page Title</h4>
        <div>
            <div class="btn btn-info ml-2">Agregar</div>
        </div>
    </div>
    <input type="text" class="form-control" name="search" id="search" placeholder="Buscar">
    <hr>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="rounded">
        <table class="table">
            <thead class="thead-light" style="border-radius: 15px">
                <tr>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
