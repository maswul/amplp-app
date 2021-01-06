<div class="btn-group">
    <a href="" class="badge-btn badge-primary" wire:click.prevent="$emit('EditId','{{$model->id}}')" role="button">Edit</a>
    <a href="" class="badge-btn badge-danger" wire:click.prevent="$emit('DelId','{{$model->id}}')" role="button">Hapus</a>
</div>
