<div>
    <div class="d-flex justify-content-between">
        <h4 class="card-title"><b>{{ $componentName }} </b> | {{ $pageTitle }}</h4>
        <div>
            <button type="button" class="btn btn-info ml-2" data-toggle="modal" data-target="#exampleModal">
                Agregar
            </button>
        </div>
    </div>
    @include('layouts.common.search')
    <hr>
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
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td class="text-center"><span><img src="{{ $category->image }}"
                                    alt="{{ 'Imagen ' . $category->image }}" height="70" width="80"
                                    class="rounded"></span></td>
                        <td class="text-center"><a href="javascript:void(0)" class="btn btn-dark mt-mobile"
                                title="Edit" wire:click="edit({{ $category }})"> <i data-feather="edit"></i></a><a
                                href="javascript:void(0)" class="btn btn-dark mt-mobile" title="Delete"
                                onclick="confirm('{{ $category->id }}')"> <i data-feather="trash"></i></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $categories->links() }}
        @include('livewire.category.form')
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            window.livewire.on('show-modal', (msg) => {
                $('#exampleModal').modal('show')
            })
        })
    </script>
</div>
