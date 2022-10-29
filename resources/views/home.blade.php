@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between">
        <h4 class="card-title"><b>Component Title </b> | Page Title</h4>
        <div>
            <button type="button" class="btn btn-info ml-2" data-toggle="modal" data-target="#exampleModal">
                Agregar
            </button>
        </div>
    </div>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="rounded table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="text-white" style="border-radius: 15px">
                <tr>
                    <th class="table-th text-white">#</th>
                    <th class="table-th text-white">Descripcion</th>
                    <th class="table-th text-white">Imagen</th>
                    <th class="table-th text-white">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Category name</td>
                    <td class="text-center"><span><img src="" alt="Ejemplo" height="70" width="80"
                                class="rounded"></span></td>
                    <td class="text-center"><a href="javascript:void(0)" class="btn btn-dark mt-mobile" title="Edit"><i
                                class="fas fa-edit"></i></a><a href="javascript:void(0)" class="btn btn-dark mt-mobile"
                            title="Delete"><i class="fas fa-trash"></i></a></td>
                </tr>
            </tbody>
        </table>
        Pagination
       {{-- Include FORM --}}
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {

        })
    </script>
@endsection
