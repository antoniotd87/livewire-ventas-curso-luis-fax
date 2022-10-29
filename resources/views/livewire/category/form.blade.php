@include('layouts.common.top-modal')

<div class="row">
    <div class="col-sm-12">
        <div class="input-group">
            <div class="input-group-preped">
                <span class="input-group-text">
                    <i data-feather="edit"></i>
                </span>
            </div>
            <input type="text" wire:model.lazy="name" class="form-control" placeholder="ej: cursos">
        </div>
        @error('name')
            <span class="text-danger er">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-preped">
                <span class="input-group-text">
                    <i data-feather="file"></i>
                </span>
            </div>
            <input type="file" class="form-control" wire:model='image'
                accept="image/x-png, image/gif, image/png">
        </div>
    </div>
</div>
@include('layouts.common.end-modal')
